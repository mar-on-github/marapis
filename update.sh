echo "Running 'git pull' from root of marapis clone."
git pull
echo "------------------------------------------------"
echo "Checking for local update scripts..."
if [ -f "./update.local.sh" ]; then
    echo "./update.local.sh exists. Will now be called."
    bash ./update.local.sh
else 
    echo "./update.local.sh does not exist. Will not be called."
fi
echo "------------------------------------------------"
echo "Update script executed." 