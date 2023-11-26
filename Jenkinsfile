pipeline {
  agent any
  stages {
    stage('Build') {
      steps {
        echo 'bonjour'
      }
    }

    stage('Test') {
      steps {
        sh 'vendor/bin/phpunit tests'
      }
    }

  }
}