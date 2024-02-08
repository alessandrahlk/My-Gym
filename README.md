## Intro:

This is an app for scheduling and booking gym classes. This app has three types of user: instructors, members and admins.

-   _Instructors_ are able to schedule classes by selecting the type of class, a date, and a time. They can view all their upcoming classes and cancel them.
-   _Members_ are able to view all the scheduled classes, select and book a slot for themselves. They can view all their upcoming bookings and cancel, if needed. And in case an instructor goes to the upcoming classes and cancels a class, all the members who made a booking will immediately receive a mail saying, this class was canceled.
-   _Admins_ are able to create and delete users.

## Tech Stack:

-   PHP
-   Laravel
-   MySQL

## Learnings:

-   Repository Design Pattern
-   Custom Middleware
-   Gates and policies
-   Seeding and factories
-   Many-to-many relationships
-   Attaching and Detaching
-   Eager loading
-   Query Scopes
-   Custom commands and logs
-   Event and Listeners
-   Send mail notifications
-   Jobs and queues
-   Schedule tasks
-   HTPP and database test

## Running the Project:

-   sail up
-   npm run dev
