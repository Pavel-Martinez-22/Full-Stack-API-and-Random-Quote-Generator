<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Random Quote Generator API</title>
    <link rel="stylesheet" href="./style.css" />
  </head>

  <body>
    <h1>Random Quote Generator API</h1>

    <!-- Project description -->
    <p>
    This project demonstrates my ability to design and implement a PHP-based,
    object-oriented RESTful API for managing quotations, authors, and categories.
    The API supports full CRUD operations through GET, POST, PUT, and DELETE
    requests and consistently returns JSON responses for client consumption.
    </p>

    <p>
      The backend was built using PHP and PostgreSQL, with environment variables used
      for secure configuration. Development and testing were completed locally using
      XAMPP and Postman before deployment. To ensure consistency across environments
      and streamline deployment, the application was containerized using Docker and
      deployed as a web service on Render. A frontend Random Quote Generator
      application consumes this API to display quotes dynamically.
    </p>

    <p>
      <strong>Note:</strong> GET requests may be tested directly in a browser.
      POST, PUT, and DELETE requests require an API client such as
      <em>Postman</em> or <em>Insomnia</em>.
    </p>

    <h2>Base URL</h2>
    <p>
      <code>https://full-stack-api-and-random-quote-generator.onrender.com/api</code>
    </p>

    <!-- GET requests -->
    <h2>GET Accepted Requests</h2>

    <h3>Quotes</h3>
    <ul>
      <li><strong>GET /quotes</strong> - Returns all quotes</li>
      <li><strong>GET /quotes?id=4</strong> - Returns a specific quote</li>
      <li><strong>GET /quotes?author_id=10</strong> - Returns all quotes by author_id</li>
      <li><strong>GET /quotes?category_id=8</strong> - Returns all quotes in category_id</li>
      <li>
        <strong>GET /quotes?author_id=3&amp;category_id=4</strong> - Returns all
        quotes from author_id=3 that are in category_id=4
      </li>
      <li><strong>GET /quotes?random=true</strong> - Returns one random quote</li>
    </ul>

    <p>If no quotes are found, the response will be:</p>
    <pre>{
  "message": "No Quotes Found"
}</pre>

    <h3>Authors</h3>
    <ul>
      <li><strong>GET /authors</strong> - Returns all authors with their ids</li>
      <li><strong>GET /authors?id=5</strong> - Returns a specific author</li>
    </ul>

    <p>If no author is found, the response will be:</p>
    <pre>{
  "message": "author_id Not Found"
}</pre>

    <h3>Categories</h3>
    <ul>
      <li><strong>GET /categories</strong> - Returns all categories</li>
      <li><strong>GET /categories?id=7</strong> - Returns a specific category</li>
    </ul>

    <p>If no category is found, the response will be:</p>
    <pre>{
  "message": "category_id Not Found"
}</pre>

    <!-- POST requests -->
    <h2>POST Requests</h2>

    <h3>Create Quote</h3>
    <ul>
      <li><strong>POST /quotes</strong></li>
    </ul>

    <p><strong>Required Request Body:</strong></p>
    <pre>{
  "quote": "Your quote text",
  "author_id": 1,
  "category_id": 2
}</pre>

    <p><strong>Successful Response:</strong></p>
    <pre>{
  "id": 29,
  "quote": "Your quote text",
  "author_id": 1,
  "category_id": 2
}</pre>

    <h3>Create Author</h3>
    <ul>
      <li><strong>POST /authors</strong></li>
    </ul>

    <pre>{
  "author": "Author Name"
}</pre>

    <h3>Create Category</h3>
    <ul>
      <li><strong>POST /categories</strong></li>
    </ul>

    <pre>{
  "category": "Category Name"
}</pre>

    <p><strong>Error Responses:</strong></p>
    <pre>{
  "message": "Missing Required Parameters"
}
{
  "message": "author_id Not Found"
}
{
  "message": "category_id Not Found"
}</pre>

    <!-- PUT requests -->
    <h2>PUT Requests</h2>

    <h3>Update Quote</h3>
    <ul>
      <li><strong>PUT /quotes</strong></li>
    </ul>

    <pre>{
  "id": 29,
  "quote": "Updated quote text",
  "author_id": 1,
  "category_id": 2
}</pre>

    <h3>Update Author</h3>
    <ul>
      <li><strong>PUT /authors</strong></li>
    </ul>

    <pre>{
  "id": 5,
  "author": "Updated Author Name"
}</pre>

    <h3>Update Category</h3>
    <ul>
      <li><strong>PUT /categories</strong></li>
    </ul>

    <pre>{
  "id": 7,
  "category": "Updated Category Name"
}</pre>

    <p><strong>Error Responses:</strong></p>
    <pre>{
  "message": "No Quotes Found"
}
{
  "message": "author_id Not Found"
}
{
  "message": "category_id Not Found"
}
{
  "message": "Missing Required Parameters"
}</pre>

    <!-- DELETE requests -->
    <h2>DELETE Requests</h2>

    <ul>
      <li><strong>DELETE /quotes</strong> - Deletes a quote by id</li>
      <li><strong>DELETE /authors</strong> - Deletes an author by id</li>
      <li><strong>DELETE /categories</strong> - Deletes a category by id</li>
    </ul>

    <p><strong>Required Request Body:</strong></p>
    <pre>{
  "id": 29
}</pre>

    <p><strong>Successful Response:</strong></p>
    <pre>{
  "id": 29
}</pre>

    <p>
      All POST, PUT, and DELETE requests must include the header:
      <code>Content-Type: application/json</code>.
    </p>
  </body>
</html>