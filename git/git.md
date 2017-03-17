# Git Study Guide

## Index

1. [Introduction to Git](#introduction-to-git)
2. [Setup and Configuration](#setup-and-configuration)
3. [Initializing Repositories](#initializing-repositories)
4. [Cloning Repositories](#cloning-repositories)
5. [Staging and Committing Changes](#staging-and-committing-changes)
6. [Branching](#branching)
7. [Merging](#merging)
8. [Handling Conflicts](#handling-conflicts)
9. [Remote Repositories](#remote-repositories)
10. [Pushing & Pulling](#pushing--pulling)
11. [Logging](#logging)
12. [Tagging](#tagging)
13. [Undoing Changes](#undoing-changes)
14. [Advanced Git Concepts](#advanced-git-concepts)
15. [Best Practices and Tips](#best-practices-and-tips)

## Introduction to Git

- **Definition**: Git is a distributed version-control system for tracking changes in source code during software development.

```bash
git --version
```

Check your Git version to ensure it's installed.

### Setup and Configuration
Configuring user information used across all local repositories
```
git config --global user.name "John Doe"
git config --global user.email johndoe@example.com
```
Set a name and email that associates your commits with your identity.

### Initializing Repositories
Starting a new repository or obtaining one from an existing URL
```git init```
Initialize a new Git repository and start tracking an existing directory.

### Cloning Repositories
Command to clone a repository
```
git clone [url]
```
Clone (download) a repository that already exists on GitHub, or another site.

### Staging and Committing Changes
Save your changes to the local repository
```
git add .
git commit -m "Commit message"
```
Stage all modified and new files and commit the staged changes.

### Branching
List, create, or delete branches
```
git branch
git branch [branch-name]
git checkout [branch-name]
```

### Merging
Integrate changes from one branch into another branch
```
git merge [branch]
```
Merge the specified branch’s history into the current branch.

### Handling Conflicts
* Conflicts generally arise when two branches have competing changes.
* Understand how to manually resolve these conflicts in your code editor.

###  Remote Repositories
Manage set of tracked repositories
```
git remote add [name] [url]
git remote -v
```
Add a new remote repository and verify the new remote URL.

### Pushing & Pulling
Update remote refs along with associated objects
```
git push [remote] [branch]
git pull [remote]
```
Share your changes (push) and update your local repo with others' changes (pull).

### Logging
Show commit logs
```
git log
```
Show the commit logs.

### Tagging
Mark specific points in history as being important
```
git tag [version-identifier]
```
Mark the current commit with a version tag.

### Undoing Changes
Command used to undo changes
```
git checkout -- [file-name.txt]
git revert [commit]
```
Discard changes in the working directory, and revert an entire commit.

### Advanced Git Concepts
Additional commands for complex situations. These include:
* Rebase
* Stash
* Reset

### Best Practices and Tips
* Write meaningful commit messages.
* Regularly pull and push changes to avoid conflicts.
* Use '.gitignore' files to exclude files not relevant to the repository.
* Remember, the key to mastering Git is consistent practice and application.

