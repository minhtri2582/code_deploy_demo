# Introduction

- This is a simple apache page repo with index.html and Appspec.yaml file for code deploy with supported shell script.
- Index file will be deployed on to Amazon Linux Server which is under auto Scaling and CICD for the same will be managed using the CodeDeploy and Code Pipeline.

**Note:** Scripts under the scripts folder does not require steps like stop/start of apache server. It's just added to demonstrate the use of `appspec.yaml` file

For the detailed steps involved in the deployment process, please refer the blog post published in [devopsage](https://devopsage.com) website.