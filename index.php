<?php
// Simple Hello World PHP app
echo "<h1>Hello from OCI DevOps Dockerized PHP App!</h1>";
echo "<p>Build ID: " . getenv('OCI_BUILD_RUN_ID') . "</p>";  // Shows build info if available
echo "<p>Current time: " . date('Y-m-d H:i:s') . " (CET)</p>";
phpinfo();  // Optional: Shows PHP config (remove in prod)
?>
