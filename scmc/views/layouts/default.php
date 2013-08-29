{% include "includes/cake.php" %}

<!DOCTYPE html public "★">
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	{% block head %}
    {% include "includes/head.php" %}
    {% endblock %}
    <body>
    	<!-- Header -->
        <head>
        	{% block header %}
    		{% include "includes/header.php" %}
    		{% endblock %}
        </head>
    	
    	<!-- Main content -->
        {% block content %}{% endblock %}

        <!-- Footer -->
        {% block footer %}
        {% include "includes/footer.php" %}
		{% endblock %}
	
        <!-- Scripts -->
        {% block foot %}
        {% include "includes/foot.php" %}
        {% endblock %}
    </body>
</html>