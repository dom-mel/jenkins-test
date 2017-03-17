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
                sh 'vendor/bin/phpunit --log-junit build/phpunit.xml --coverage-html build/coverage test'
            }
        }
        stage('deploy') {
            steps {
                input "ready to deploy? "
                echo "Yay i'm live"
            }
        }
        post {
            always {
                junit 'build/phpunit.xml'
                publishHTML target: [
                              allowMissing: false,
                              alwaysLinkToLastBuild: false,
                              keepAll: true,
                              reportDir: 'build/coverage',
                              reportFiles: 'index.html',
                              reportName: 'RCov Report'
                ]

            }
        }


    }
}

