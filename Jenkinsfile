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
                sh 'vendor/bin/phpcs --standard=PSR2 --report-checkstyle=build/cs.xml src/ || true'
                sh 'vendor/bin/phpmd src/ xml cleancode,codesize,controversial,design,naming,unusedcode --ignore-violations-on-exit --reportfile build/phpmd.xml'
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
                            reportName: 'Unit test coverage Report'
                        ]
                    step([$class: 'hudson.plugins.checkstyle.CheckStylePublisher', pattern: 'build/cs.xml'])
                    step([$class: 'PmdPublisher', pattern: 'build/phpmd.xml'])

                }
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

