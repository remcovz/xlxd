pipeline {
    agent any 

    stages {
        stage('Build') { 
            steps { 
                sh './build.sh' 
            }
        }
        stage('Test'){
            steps {
                sh './test.sh'
            }
        }
        stage('Deploy') {
            steps {
                sh './deploy.sh'
            }
        }
    }
    post {
        always {
            deleteDir()
        }
        failure {
                mail to: 'remco@zuijlen.eu', subject: "Failed Pipeline: ${currentBuild.fullDisplayName}", body: "Something is wrong with ${env.BUILD_URL}"
        }
    }
}
