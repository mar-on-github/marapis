echo "Running 'git pull' from root of marapis clone."
git pull
echo "------------------------------------------------"
echo "Checking for local update scripts..."
if [ -f "../update.local.sh" ]; then
    echo "<font style=\"color: green\">../update.local.sh exists. Will now be called.</font><font style=\"background-color: #CC9999\">"
    bash ../update.local.sh
    echo "</font>"
else 
    echo "<font style=\"color: yellow\">../update.local.sh does not exist. Will not be called.</font>"
fi
echo "------------------------------------------------"
echo "Update script executed. </pre><br><h3>Current directory:</h3><pre style=\"border: 5px solid; background-color: #33CCCC\">"
ls .