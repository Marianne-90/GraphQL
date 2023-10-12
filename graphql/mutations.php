<?

use GraphQL\Type\Definition\ObjectType;

require('mutations/userMutations.php');

$mutations = array();
$mutations+= $userMutations;

$rootMutation = new ObjectType([
'name' => 'mutations',
'fields' => $mutations,
]);

