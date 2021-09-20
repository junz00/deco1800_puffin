while true; do
    echo "Updating directory from git repository..."
    git pull
    echo "Sleeping for 60 seconds."
    sleep 60
done
