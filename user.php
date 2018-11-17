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
 * @apiError UserAlreadyTaken User already exists
 *
 * @apiErrorExample Error-Response:
 *     HTTP/1.1 400 Already Exists
 *     {
 *       "error": "User Already Exists"
 *     }
 */


/**
 * @api {delete} /user/ Delete user - II error-responses
 * @apiName DeleteUser
 * @apiGroup Users
 *
 * @apiParam {String} email User's email
 * or
 * @apiParam {Number}  id User id
 *
 *
 * @apiSuccessExample Success-Response:
 *     HTTP/1.1 200 OK  User was deleted
 *     {
 *       "id": "123"
 *      
 *     }
 *
 * @apiError UserNotExist  User not  exists
 *
 * @apiErrorExample Error-Response:
 *     HTTP/1.1 400 User not  Exists
 *     {
 *       "error": "User not Exists"
 *     }
 *
 * @apiError OperationForbidden  User  can't delete another user
 *
 * @apiErrorExample Error-Response:
 *     HTTP/1.1 403 Forbidden to delete another user
 *     {
 *       "error": "Forbidden to delete another user"
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
 * @apiError ForbiddenOperation  User can't change information of  another user
 *
 * @apiErrorExample Error-Response:
 *     HTTP/1.1 404 ForbiddenOperation 
 *     {
 *       "error": "User can't change information of  another user"
 *     }
 *
 * @apiDescription
 *
 * User may change only himself parameters 
 *
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

