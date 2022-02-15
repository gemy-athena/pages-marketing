# Pages Marketing

## L'architecture

Le projet `pages-marketing` est hébergé sur un repository [Github](https://github.com/gemy-athena/pages-marketing).

Un compte [Netlify](https://app.netlify.com/sites/gemy-pages-marketing/overview) est configuré pour écouter les changements du repository (actions git) et publier automatiquement le contenu du dossier public

## Les pages

Toutes les pages HTML doivent se mettre dans le dossier public

Seul le dossier publique est publié

Le fichiers `_redirects` permet de définir une url propre pour une fichier html, exemple :

la page home.html est accessible au travers du lien `https://monsite.fr/`
la page test.html est accessible au travers du lien `https://monsite.fr/super-test`

```ini
/ /home.html 200
/super-test /test.html 200
```

### Les liens entres pages

Pour faire des liens entre les pages, il faut rediriger vers __liens publiques__ et nons les __liens techniques__, exemple :

```html
<a href="/super-test">Lien vers sla page super test</a>

et non

<a href="/test.html">Lien vers sla page super test</a>
```


### Les images

Pour faire un lien vers une image qui serait dans le sous-dossier `images` du répertoire public :

```html
<img src="images/lechien.jpg" alt="Le chien">
```
