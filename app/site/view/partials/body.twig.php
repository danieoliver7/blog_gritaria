<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{% block titletitle %}{% endblock %}</title>

    <link rel="preload" href="{{BASE}}assets/css/style.css" as="style">

    <link rel="stylesheet" href="{{BASE}}assets/css/style.css">

    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    {% block extraHeader %}{% endblock %}
</head>
    <body>
        {% include('/partials/header.twig.php')%}

        {% block body %}

        {% endblock %}

        {% include('/partials/footer.twig.php')%}

        {% block extraFooter %}{% endblock %}
    </body>
</html>