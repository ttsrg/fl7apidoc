/**
 * @apiDescription
 * Only admins sees that menues and have access
 *
 * @api {put} /product/ Insert  new product
 * @apiName InsertNewProduct
 * @apiGroup Products
 *
 * @apiParam {String} name  New product's name
 * @apiParam {String} description Product's description
 * @apiParam {String} category  Product's category
 *
 * @apiSuccess {Number} id New product id
 * @apiSuccess {Number} discount   Product's discount
 * @apiSuccess {Number} balance Product's balance
 * @apiSuccess {String} description  Product's description
 * @apiSuccess {String} category Product's category
 *
 * @apiSuccessExample Success-Response:
 *     HTTP/1.1 200 OK
 *     {
 *       "id": "123"
 *       "discount": "2"
 *       "balance": "356"
 *       "description": "pink handcuffs"
 *       "category": "universal stuffs"
 *     }
 *
 * @apiError ProductAlreadyTaken Product already exists
 *
 * @apiErrorExample Error-Response:
 *     HTTP/1.1 400 Already Exists
 *     {
 *       "error": "Product Already Exists"
 *     }
 */


/**
 * @api {delete} /product/ Delete product 
 * @apiName DeleteProduct
 * @apiGroup Products
 *
 * @apiParam {String} name Product's name
 * or
 * @apiParam {Number}  id Product's id
 *
 *
 * @apiSuccessExample Success-Response:
 *     HTTP/1.1 200 OK  Product was deleted
 *     {
 *       "id": "123"
 *      
 *     }
 *
 * @apiError ProductNotExist  Product not  exists
 *
 * @apiErrorExample Error-Response:
 *     HTTP/1.1 400 Product not  Exists
 *     {
 *       "error": "Product not Exists"
 *     }
 *
 * @apiError OperationForbidden  Product  can't de deleted  if  balance not  null
 *
 * @apiErrorExample Error-Response:
 *     HTTP/1.1 403 Forbidden to delete  product
 *     {
 *       "error": "Forbidden to delete product. The balance not null"
 *     }

 */



/**
 * @api {post} /product/:id Update product's info
 * @apiName UpdateProduct
 * @apiGroup Products
 *
 *
 * @apiParam {String} name  New product's name
 * @apiParam {String} description Product's description
 * @apiParam {String} category  Product's category
 *
 * @apiSuccess {Number} id New product id
 * @apiSuccess {Number} discount   Product's discount
 * @apiSuccess {Number} balance Product's balance
 *
 * @apiSuccessExample Success-Response:
 *     HTTP/1.1 200 OK
 *     {
 *       "id": "123"
 *       "discount": "2"
 *       "balance": "356"
 *       "handcuffs": "pink handcuffs"
 *       "unisex": "universal stuffs"
 *     }
 *
 * @apiError ProductAlreadyTaken Product already exists
 *
 * @apiErrorExample Error-Response:
 *     HTTP/1.1 400 Already Exists
 *     {
 *       "error": "Product Already Exists"
 *     }
 *
 */




