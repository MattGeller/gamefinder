## About GameFinder

GameFinder helps gamers catalogue, sort, and share their game libraries.

Current features:
- An API is in place that will allow users to securely create entries in their game library.
- The API provides validation, so that requests made with blank or empty fields are rejected.
- Duplicate game entries are not allowed for the same user.
- Games can be marked as "favorited" for easier cataloguing.

Current "behind-the-scenes" features:
- Automated tests and factories are in place to aid in development and ensure that the app will continue to be robust.

Future development plans:
- A front end must be built to allow users to navigate the site.
  - The search bar should use auto-complete. If game names are indexed in the database, and cached on the server, this should not be too much of a performance hit even if the number of games is in the millions.
- Currently, a one-to-many relationship exists between users and games, but this should be refactored to a many-to-many relationship.
  - As part of this refactor, the "favorited" feature should be stored on the pivot table, so that users' unique preferences will be retained.
- This app could help gamers keep track of their libraries across platforms. In that case, the pivot table could keep track of which storefront/consoles they used to make their purchase.
- This app could allow gamers share their libraries
  - A "public" boolean could be stored on each user to track whether they've elected to share their library.
  - A "share" button could be made which generates a sharable link and sets the user's "public" boolean to true.

Thanks for taking a look at my project!
