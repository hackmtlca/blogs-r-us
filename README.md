# Blogs "Я" Us

This problem is part of the `Intro to Hacking Workshop`. View the [Bug Bounty Guide](https://github.com/hackmtlca/bug-bounty-guide) for more information about the score system.

## Context

Blogs "Я" Us is a casual blogging site for you and your network. Everything is private, no one should have access to other's information. This said, during the past few weeks, Jack reported that there were weird changes happening to the website. He says that he's tired of looking for `SQL Injections`, he needs others' help. Can you find out what's going on?

## Addition Note

This problem will be used as demonstration for the first `Intro to Hacking Workshop`. We will cover one of the many possible ways that the current state of the website is vulnerable and how we can fix it.

## Running the App

All you need is `Docker`. Run the following command in the root of this repository (hold CTRL+C to quit):

```
docker-compose up
```

A frontend instance will be created at `http://localhost/`. Make sure to wait for a message from the database instance stating `port: 3306` is open.
