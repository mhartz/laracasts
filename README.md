laracasts
=========

Repository for the laracasts lessons
<ol>
  <li><a href="#from_scratch">Laravel From Scratch</a><li>
</ol>



<h1 id="from_scratch">Laravel From Scratch</h1>
<p>Installing Laravel, teaching the basics of MVC architecture, scaffolding, databases, and configurations. Good place to start, but it doesn't go much beyond the Laravel documentation.</p>
<ol>
  <li><a href="#1_1">Skipped</a></li>
  <li><a href="#1_2">Skipped</a></li>
  <li><a href="#1_3">Skipped</a></li>
  <li><a href="#1_4">Databases</a></li>
  <li><a href="#1_5">Eleoquent</a></li>
</ol>

<h2 id="1_4">Databases</h2>
<p>Creating the database and connecting it to the Laravel Application.</p>
<p>
  <b>Files changed:</b><br>
  app/config/database.php<br>
  app/routes.php
</p>
<p>
  <b>Code Added:</b><br>
  <pre><code>
    //get all users from the table
    Route::get('/', function() {
      $users = DB::table('users')->get();
      
    dd($users);
    });
    
    // get the first user of a table
    Route::get('/', function() {
      $user = DB::table('users')->find(1);
      
      dd($user); 
    });
      </code></pre>
</p>


<h2 id="1_5">Eloquent Basics</h2>
<p>Explanation of Laravel's ORM, called eloquent. Makes writing database queries a cinch.</p>
<p>
  <b>Files changed:</b><br>
  app/routes.php
</p>
<p>
  <b>Code Added:</b><br>
  <pre><code>
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
  </code></pre>
</p>





<h2 id="1_6">Blade Basics</h2>
<p>Laravel's templating engine. This lesson creates a simple layout for displaying users.</p>
<p>
  <b>Files changed:</b><br>
  
</p>
<p>
  <b>Code Added:</b><br>
  <code>
    
  </code>
</p>
