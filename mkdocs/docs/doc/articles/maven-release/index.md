# Releasing Epsilon to Maven Central

This article describes the overall process required to release a new stable release of Epsilon to Maven Central. There are quite a few steps involved, some of which are outside our control. The guide will describe the steps that we do control, and point you to the relevant resources for the others.

## Preparation

The first step is to gain deploy rights to our `org.eclipse.epsilon` groupId in the [Sonatype OSS](https://oss.sonatype.org/) Nexus repository. To do this, please register at the [Sonatype JIRA](https://issues.sonatype.org/) and give your JIRA username to the Epsilon release engineer(s), so we may file a ticket to have deploy rights granted to you.

Once the ticket goes through, you should set up your Maven environment according to the [Sonatype OSSRH Guide](https://central.sonatype.org/pages/ossrh-guide.html). Specifically, you should set up your Maven `settings.xml` file appropriately (see [here](https://central.sonatype.org/pages/apache-maven.html) for details), generate a GnuPG keypair and distribute it to the keyservers checked by Sonatype for validation:

    gpg --keyserver http://keys.gnupg.net:11371/ --send-keys yourkey
    gpg --keyserver http://pool.sks-keyservers.net:11371/ --send-keys yourkey
    gpg --keyserver http://keyserver.ubuntu.com:11371/ --send-keys yourkey

## Creation of assemblies and JARs

Next, you should tweak the `standalone/org.eclipse.epsilon.standalone/jarmodel.xml` file, to make sure that it has the right contents, version number, and interim flag (`true` for interim or `-SNAPSHOT` builds that only go to Sonatype OSSRH Snapshots, `false` for stable builds that go to Maven Central). 

Run the `jarmodel2mvn.launch` launch configuration (you will need Epsilon to be installed into your own Eclipse first). This will generate the appropriate Maven assembly descriptors.

Trigger a full rebuild of Epsilon from the root folder of the
repository:

    mvn clean install

Go to the standalone project and build the Javadoc JARs:

    cd standalone/org.eclipse.epsilon.standalone
    bash build-javadoc-jar.sh

## Upload to staging repository

Once this is done, build the javadoc JARs and use our custom Maven plugin to deploy to a Sonatype OSS Nexus staging repository:

    cd standalone/org.eclipse.epsilon.standalone
    mvn org.eclipse.epsilon:eutils-maven-plugin:deploy \
      -Ddeploy.url=https://oss.sonatype.org/service/local/staging/deploy/maven2

This may ask a few times for the password of your GnuPG key, so make sure to watch the build process.

After this completes, you will have a staging repository prepared at the Sonatype Nexus repository. Go to [Sonatype OSS](https://oss.sonatype.org/), log in with your JIRA credentials and check the "Staging Repositories" section. Search for "epsilon" and you should be able to see it.

## Release to Maven Central

Select the repository and check in the "Contents" tab that everything is in order. If you are not happy with it, you can drop the repository and retry the upload. If you are happy with the contents, click on "Close" and wait until all checks in the "Activity" tab have passed. If any checks do not pass (e.g. you are missing source/javadoc attachments or the GnuPG keypairs are not available in the usual keyservers), correct the issue and try closing again.

Once the repository has closed successfully, you should be able to press "Release". After about an hour or so, the staging repository will disappear, and after a few hours the contents of the repository should be available from [Maven Central](https://search.maven.org/). This may take up to a day, so be patient!