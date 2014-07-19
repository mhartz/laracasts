<?php

/*
* Video 4: Databases
*/


// //get all users from the table
// Route::get('/', function() {
//   $users = DB::table('users')->get();
  
// dd($users);
// });

// // get the first user of a table
// Route::get('/', function() {
//   $user = DB::table('users')->find(1);
  
//   dd($user); 
// });


/*
* Video 5: Eloquent
*/

// // Laravel ORM
// Route::get('/', function() {
//   // below statement is the same as $users = DB::table('users')->where('username', '!=', 'max')->get();
//   $users = User::where('username', '!=', 'max')->get();
  
//   return $users;
// });

// // grab all users
// Route::get('/', function() {
//   $users = User::all();
  
//   return $users;
// });

// // create a user
// Route::get('/', function() {
  
//   // // long way of doing it 
//   // $user = new User;
//   // $user->username = 'NewUser';
//   // $user->password = Hash::make('password');
//   // $user->save();
  
//   // Short way of doing it by creating an object
//   User::create([
//       'username' => 'AnotherUser',
//       'password' => Hash::make('anotherpassword')
//   ]);
  
//   return User::all();
// });


// Update a user
Route::get('/', function() {
  $user = User::find(2);
  
  
  $user->username = 'UpdatedName';
  $user->save();
  
  return $user;
});