pipeline {
    agent any
    stages {
        stage('Build') {
            steps {
                echo 'Building'
            }
        }
        stage('Test') {
            steps {
                echo 'Testing'
                input "ok?"
            }
        }
        stage('Deploy') {
            steps {
                echo 'Deploying'
            }
        }
    }
}

