pipeline {
    agent any
    stages {
        stage('Setup') {
            steps {
                sh 'composer install'
            }
        }
        stage('Test') {
            steps {
                sh 'vendor/bin/phpunit test'
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

