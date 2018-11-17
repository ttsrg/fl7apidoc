/**
 * @api {get} /search/products/:name Searching  product
 * @apiName SearchProduct
 * @apiGroup Search
 *
 * @apiSuccess {Object} product Cpecific product
 *
 * @apiSuccessExample Success-Response:
 *       HTTP/1.1 200 OK
 *       {
 *       "products": [{
 *         "id": 123,
 *         "name": "ProductName",
 *         "description": "ProductDescription",
 *         "balance": "ProductBalance",
 *         "discount": "ProductDiscount",
 *         "category": "ProductCategory"
 *       }]
 *       }
 *
 * @apiError NotFound Product not found
 *
 * @apiErrorExample Error-Response:
 *     HTTP/1.1 404 NotFound
 *     {
 *       "error": "Product not found"
 *     }
 */

/**
 * @api {get} /search/buyer/:name Search for a name of byuer
 * @api {get} /search/buyer/:email Search byuer by  a email
 * @api {get} /search/buyer/:id Search byuer via id
 * @apiName SearchUser
 * @apiGroup Search
 *
 * @apiSuccess {List} List Full user's info
 *
 * @apiSuccessExample Success-Response:
 *       HTTP/1.1 200 OK
 *       {
 *       "List":"id, name, orders, adressess  and etc....."
 *       }
 *
 * @apiError NotFound User not found
 *
 * @apiErrorExample Error-Response:
 *     HTTP/1.1 404 NotFound
 *     {
 *       "error": "User not found"
 *     }
 */


/**
 * @api {get} /search/order/:id Search for an order
 * @apiName SearchOrder
 * @apiGroup Search
 *
 * @apiSuccess {List} List List order
 *
 * @apiSuccessExample Success-Response:
 *       HTTP/1.1 200 OK
 *       {
 *       "List":"id, name,  address and etc....."
 *       }
 *
 * @apiError NotFound Order not found
 *
 * @apiErrorExample Error-Response:
 *     HTTP/1.1 404 NotFound
 *     {
 *       "error": "Order not found"
 *     }
 */

