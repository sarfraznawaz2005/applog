git status
git add .
read commitMessage
git commit -m "$commitMessage"
git push --delete origin 1.0.0
git tag --delete 1.0.0
git tag 1.0.0
git push
git push --tags