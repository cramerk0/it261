<footer>
        <ul>
            <li>Copyright &copy;2023</li>
            <li>All Rights Reserved</li>
            <li><a href="https://github.com/cramerk0/it261">Web Design by Xiaoyan</a></li>
            <li><a id="html-checker" href="#">HTML Validation</a></li>
            <li><a id="css-checker" href="#">CSS Validation</a></li>
        </ul>

        <script>
            document.getElementById("html-checker").setAttribute("href","https://validator.w3.org/nu/?doc=" + location.href);
            document.getElementById("css-checker").setAttribute("href","https://jigsaw.w3.org/css-validator/validator?uri=" + location.href);
        </script>
    </footer>
        
</body>
</html>