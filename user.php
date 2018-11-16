/**
 * @api {put} /user/ Create new user
 * @apiName CreateUser
 * @apiGroup Users
 *
 * @apiParam {String} email User's email
 * @apiParam {String} password User's password
 *
 * @apiSuccess {Number} id New user id
 *
 * @apiSuccessExample Success-Response:
 *     HTTP/1.1 200 OK
 *     {
 *       "id": "123"
 *     }
 *
 * @apiError EmailAlreadyTaken User already exists
 *
 * @apiErrorExample Error-Response:
 *     HTTP/1.1 400 Already Exists
 *     {
 *       "error": "User Already Exists"
 *     }
 */

/**
 * @api {post} /user/:id Update user's info
 * @apiName UpdateUser
 * @apiGroup Users
 *
 * @apiParam {String} name User's name
 * @apiParam {String} email User's email
 * @apiParam {String} password User's password
 *
 * @apiSuccess {Number} id User id
 *
 * @apiSuccessExample Success-Response:
 *     HTTP/1.1 200 OK
 *     {
 *       "id": "123"
 *     }
 *
 * @apiError EmailAlreadyTaken User already exists
 *
 * @apiErrorExample Error-Response:
 *     HTTP/1.1 400 Already Exists
 *     {
 *       "error": "User Already Exists"
 *     }
 *
 * @ apiDescription
 *
 * User may change only himself parameters 
 */



/**
 * @api {post} /user/:id Update user's status
 * @apiName UpdateUserStatus
 * @apiGroup Users
 * @apiPermission Admin
 *
 * @apiParam {String} role  User's role (Admin/Buyer)
 * @apiParam {String} account  User's  account (Enabled/Disabled)
 *
 * @apiSuccess {Number} id User id
 *
 * @apiSuccessExample Success-Response:
 *     HTTP/1.1 200 OK
 *     {
 *       "id": "123"
 *     }
 *
 * @apiError  Error with account  or role
 *
 * @apiErrorExample Error-Response:
 *     HTTP/1.1 400  Error with account  or role
 *     {
 *       "error": "Error with account  or role"
 *     }
 *
 */

