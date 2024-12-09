function myFunc() {
  $i = 0; // Initialize $i outside the loop
  for ($i = 0; $i < 10; $i++) {
    // Some code here
  }
  return $i; // Now $i is in scope and accessible
}