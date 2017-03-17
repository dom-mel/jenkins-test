pipeline {
    agent any
    stages {
        stage('Test') {
            steps {
                /root/tools/vendor/bin/phpunit test
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

