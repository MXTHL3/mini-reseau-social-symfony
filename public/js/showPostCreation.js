document.addEventListener('DOMContentLoaded', function() {
    const postContainer = document.getElementById('postContainer');
    const showPostCreation = document.getElementById('showPostCreation');

    let postCreationIsShown = false;

    showPostCreation.addEventListener('click', function(e) {
        e.preventDefault();
        postCreationIsShown = !postCreationIsShown;
        if (postCreationIsShown) {
            postContainer.style.display = 'block';
        } else {
            postContainer.style.display = 'none';
        }
    });
});