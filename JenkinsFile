pipeline {
    agent any

    stages {

        stage('Checkout') {
            steps {
                checkout scm
            }
        }

        stage('Build Containers') {
            steps {
                sh 'docker compose build --no-cache'
            }
        }

        stage('Run Environment') {
            steps {
                sh 'docker compose up -d'
            }
        }

        stage('Smoke Test') {
            steps {
                sh 'curl -f http://localhost:5000'
            }
        }
    }

    post {
        always {
            sh 'docker compose down'
        }
    }
}
