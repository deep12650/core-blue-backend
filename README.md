## Core Blue Laravel API Trial Project 2023

### Time Spent
- Total 6 hours

### Project Stories

#### Epic 1: Browsing the catalogue/Viewing boats
As a visitor, I’d like to be able to browse the catalogue of boats, giving me a summary of the most important details of each product.
As a visitor, I’d like to click into boats on the catalogue and view additional information on them.
##### Story 1
As a visitor, I’d like to be able to see a list of all the boats in the catalogue, so that I can browse them.
##### Story 2
As a visitor, I’d like to be able to see the details of a single boat, so that I can see all the information about it.
##### Story 3
As a visitor, I’d like to be able to see the variants of a boat, so that I can see all the different options available for it.
##### Story 4
As a visitor, I’d like to be able to see the price of a boat, so that I can see how much it costs.
##### Story 5
As a visitor, I’d like to be able to see the name of a boat, so that I can see what it’s called.
##### Story 6
As a visitor, I’d like to be able to see the description of a boat, so that I can see what it’s like.
##### Story 7
As a visitor, I’d like to be able to see the SKU of a boat, so that I can see what it’s called.
##### Story 8
As a visitor, I’d like to be able to see the status of a boat, so that I can see if it’s available or not.
##### Story 9
As a visitor, I’d like to be able to see the images of a boat, so that I can see what it looks like.
##### Story 10
As a visitor, I’d like to be able to see the videos of a boat, so that I can see what it looks like.

#### Epic 2: Filtering/Sorting the catalogue
As a visitor, I’d like to be able to filter the catalogue of boats, so that I can find the boat I’m looking for.
##### Story 1
As a visitor, I’d like to be able to filter the catalogue of boats by name, so that I can find the boat I’m looking for.
##### Story 2
As a visitor, I’d like to be able to filter the catalogue of boats by price, so that I can find the boat I’m looking for.
##### Story 3
As a visitor, I’d like to be able to filter the catalogue of boats by status, so that I can find the boat I’m looking for.
##### Story 4
As a visitor, I’d like to be able to filter the catalogue of boats by variant, so that I can find the boat I’m looking for.
##### Story 5
As a visitor, I’d like to be able to sort the catalogue of boats by name, so that I can find the boat I’m looking for.
##### Story 6
As a visitor, I’d like to be able to sort the catalogue of boats by price, so that I can find the boat I’m looking for.
##### Story 7
As a visitor, I’d like to be able to sort the catalogue of boats by status, so that I can find the boat I’m looking for.

#### Epic 3: Searching the catalogue
As a visitor, I’d like to be able to search the catalogue of boats, so that I can find the boat I’m looking for.
##### Story 1
As a visitor, I’d like to be able to search the catalogue of boats by name, so that I can find the boat I’m looking for.
##### Story 2
As a visitor, I’d like to be able to search the catalogue of boats by variant, so that I can find the boat I’m looking for.
##### Story 3
As a visitor, I’d like to be able to search the catalogue of boats by category, so that I can find the boat I’m looking for.

#### Epic 4: Purchasing a boat
As a visitor, I’d like to use my card to purchase a boat, so that I can buy it.

##### Story 1
As a visitor, I’d like to be able to add a boat to my cart, so that I can buy it.
##### Story 2
As a visitor, I’d like to be able to remove a boat from my cart.
##### Story 3
As a visitor, I’d like to be able to see the total price of my cart, so that I can see how much it costs.
##### Story 4
As a visitor, I’d like to be able to pay from my card, so that I can buy the boat.
##### Story 5
As a visitor, I’d like to be able to see the status of my order, so that I can see if it’s been successful or not.
##### Story 6
As a visitor, I’d like to be able to see the details of my order, so that I can see what I’ve bought.


### Installation
- Clone the repository
- Create a database
- Copy `.env.example` to `.env`
- Update `.env` with your database credentials
- Run `composer install`
- Run `php artisan db:migrate`
- Run `php artisan db:seed`

### GraphQL Playground
- Run `php artisan serve`
- Visit `http://127.0.0.1:8000/graphiql`
- Run the following query to get all products and it's variant:
```
query
{
    products {
      paginatorInfo {
        total
          currentPage
          hasMorePages
      }
      data {
        id
        name
        variants
        {
          name
          price
          description
          sku
          is_active
        }
      }
    }
}
```
