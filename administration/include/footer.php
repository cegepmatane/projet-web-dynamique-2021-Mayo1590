<?php
if (isset($_SESSION['membre']['pseudonyme']) && !empty($_SESSION['membre']['pseudonyme']) && $_SESSION['membre']['permission'] > 0)
{
?> 
<footer>
        <nav class="navbar navbar-light bg-secondary">
            <div class="container-fluid">
                <span class="navbar-text"> &copy;Maya Lennox </span>
            </div>
        </nav>
    </footer>
</body>
<?php
}
?>
</html>