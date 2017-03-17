pipeline {
    agent any
    stages {
        stage('Setup') {
            steps {
                composer
            }
        }
        stage('Test') {
            steps {
                sh './root/tools/vendor/bin/phpunit test'
            }
        }
        stage('deploy') {
            steps {
                input "ready to deploy? "
                echo "Yay i'm live"
            }
        }
    }
}

