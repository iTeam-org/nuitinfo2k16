
# 90 DevOps : industrialiser pour plus d'agilité (intégration et déploiement continue)

- 1) Un logiciel de gestion de version des sources (exemples : Git, SVN, etc...) ;
- 2) Un outil d’intégration continue pour transformer le code de l’étape 1, en livrable (exemples : Jenkins, Bamboo, etc...) ;
- 3) Un logiciel pour stocker les livrables produits à l'étape 2 (exemples : Artifactory, NEXUS repository, etc...) ;
- 4) Un logiciel pour installer les livrables stockés à l’étape 3 (exemples : Ansible, scripts SHELL, etc...) ;

---

Nous avons configuré :

- 1) Git
- 2) Travis: lance les tests pour chaque commit et deploy pour les commits sur master (fichier de conf `/.travis.yml`)
- 3) Github (possibilité de faire une archive des sources lors d'un build Travis réussi)
- 4) Script shell (`/script/deploy.sh`)

