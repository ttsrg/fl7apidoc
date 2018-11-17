
/**
 * @api {put} /Order/ Create new order
 * @apiName CreateOrder
 * @apiGroup Orders
 *
 * @apiParam {Number} id Order id
 * @apiParam {List} list Order list
 *
 * @apiSuccess {Number} id New order id
 *
 * @apiSuccessExample Success-Response:
 *     HTTP/1.1 200 OK
 *     {
 *       "id": "123"
 *       "List": "status, date&time,product's list, price, user, address, payment"
 *     }
 *
 * @apiError OrderAlreadyTaken Order already exists
 *
 * @apiErrorExample Error-Response:
 *     HTTP/1.1 400 Already Exists
 *     {
 *       "error": "Order Already Exists"
 *     }
 */


/**
 * @api {delete} /order/ Delete order
 * @apiName DeleteOrder
 * @apiGroup Orders
 *
 * @apiParam {Number}  id Order id
 *
 *
 * @apiSuccessExample Success-Response:
 *     HTTP/1.1 200 OK  Order was deleted
 *     {
 *       "id": "123"
 *     }
 *
 * @apiError UserNotExist  Order not  exists
 *
 * @apiErrorExample Error-Response:
 *     HTTP/1.1 400 Not  Exists
 *     {
 *       "error": "Order not Exists"
 *     }
 *
 */



/**
 * @api {post} /order/:id Update order's info
 * @apiName UpdateOrder
 * @apiGroup Orders
 *
 * @apiParam {Number} id Order's id
 * @apiParam {List} list Order list
 *
 * @apiSuccess {Number} id Order id
 *
 * @apiSuccessExample Success-Response:
 *     HTTP/1.1 200 OK
 *     {
 *       "id": "123"
 *       "List": "status, date&time,product's list, price, user, address, payment"
 *     }
 *
 * @apiError ForbiddenOperation  User can't change information of  another user
 *
 * @apiErrorExample Error-Response:
 *     HTTP/1.1 404 ForbiddenOperation 
 *     {
 *       "error": "User can't change order of  another user"
 *     }
 *
 * @apiDescription
 *
 * User may change only himself orders, but admin may
 *
 */

