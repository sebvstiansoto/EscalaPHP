<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'slug' => 'ck-intro',
    'order' => 1,
    'title' => 'CKA overview',
    'level' => 'Conceptos',
    'minutes' => 30,
    'summary' => 'Certified Kubernetes Administrator.',
    'concepts' => 
    array (
      0 => 'cka',
      1 => 'kubernetes',
      2 => 'cert',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'CKA',
        'body' => '**CNCF Certified Kubernetes Administrator** — exam **práctico** terminal — 17 tasks, 2h, 66% pass — no multiple choice.',
        'code' => 'apiVersion: v1
kind: ConfigMap
metadata:
  name: ck-intro
data:
  APP_ENV: production',
      ),
      1 => 
      array (
        'heading' => 'Dominios',
        'body' => 'Storage 10%, Workloads 30%, Networking 20%, Troubleshooting 30%, Cluster 10%.',
        'code' => 'apiVersion: v1
kind: ConfigMap
metadata:
  name: ck-intro
data:
  APP_ENV: production',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿CKA exam tipo?',
        'options' => 
        array (
          0 => 'Hands-on kubectl terminal',
          1 => 'Multiple choice only',
          2 => 'Essay',
        ),
        'answer' => 'Hands-on kubectl terminal',
        'explanation' => 'Speed kubectl critical.',
        'pro_tip' => 'Curso kubernetes prerequisite.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿kubectl alias exam?',
        'options' => 
        array (
          0 => 'k=kubectl acelera — practice',
          1 => 'Prohibido',
          2 => 'Solo helm',
        ),
        'answer' => 'k=kubectl acelera — practice',
        'explanation' => 'Save keystrokes 2h.',
        'pro_tip' => 'kubectl completion bash.',
      ),
    ),
  ),
  1 => 
  array (
    'slug' => 'ck-pods',
    'order' => 2,
    'title' => 'Pods y workloads',
    'level' => 'Práctica',
    'minutes' => 40,
    'summary' => 'Create, debug, resources.',
    'concepts' => 
    array (
      0 => 'pod',
      1 => 'deployment',
      2 => 'resources',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Pods',
        'body' => 'kubectl run --image=nginx --dry-run=client -o yaml — edit — apply -f pod.yaml',
        'code' => 'kubectl get pods -A',
      ),
      1 => 
      array (
        'heading' => 'Resources',
        'body' => 'requests/limits CPU memory — OOMKilled si exceed memory limit.',
        'code' => 'kubectl get pods -A',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Deployment vs Pod direct?',
        'options' => 
        array (
          0 => 'Deployment manages replicas rolling',
          1 => 'Pod always production',
          2 => 'Same',
        ),
        'answer' => 'Deployment manages replicas rolling',
        'explanation' => 'Exam create Deployments.',
        'pro_tip' => 'kubectl create deployment --image.',
      ),
      1 => 
      array (
        'type' => 'contains',
        'question' => 'Escribe kubectl get pods',
        'must_contain' => 
        array (
          0 => 'kubectl',
          1 => 'pods',
        ),
        'hint' => 'kubectl get pods -A',
        'explanation' => 'List all namespaces.',
        'pro_tip' => '-o wide extra info.',
      ),
    ),
  ),
  2 => 
  array (
    'slug' => 'ck-services',
    'order' => 3,
    'title' => 'Services y networking',
    'level' => 'Práctica',
    'minutes' => 40,
    'summary' => 'ClusterIP, NodePort, Ingress, DNS.',
    'concepts' => 
    array (
      0 => 'service',
      1 => 'ingress',
      2 => 'dns',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Services',
        'body' => 'ClusterIP internal, NodePort external port, LoadBalancer cloud LB.',
        'code' => 'apiVersion: v1
kind: ConfigMap
metadata:
  name: ck-services
data:
  APP_ENV: production',
      ),
      1 => 
      array (
        'heading' => 'DNS',
        'body' => 'my-svc.my-namespace.svc.cluster.local — CoreDNS.',
        'code' => 'apiVersion: v1
kind: ConfigMap
metadata:
  name: ck-services
data:
  APP_ENV: production',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿ClusterIP?',
        'options' => 
        array (
          0 => 'Internal cluster only',
          1 => 'Public internet always',
          2 => 'No IP',
        ),
        'answer' => 'Internal cluster only',
        'explanation' => 'Default Service type.',
        'pro_tip' => 'Ingress HTTP routing.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿kube-dns/CoreDNS?',
        'options' => 
        array (
          0 => 'Service discovery names',
          1 => 'External DNS only',
          2 => 'Database',
        ),
        'answer' => 'Service discovery names',
        'explanation' => 'Pods resolve services.',
        'pro_tip' => 'Curso nginx-proxy compare.',
      ),
    ),
  ),
  3 => 
  array (
    'slug' => 'ck-storage',
    'order' => 4,
    'title' => 'Storage CKA',
    'level' => 'Intermedio',
    'minutes' => 35,
    'summary' => 'PV, PVC, StorageClass.',
    'concepts' => 
    array (
      0 => 'pv',
      1 => 'pvc',
      2 => 'storageclass',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'PersistentVolume',
        'body' => 'PV cluster resource — PVC pod claim — StorageClass dynamic provision.',
        'code' => 'apiVersion: v1
kind: ConfigMap
metadata:
  name: ck-storage
data:
  APP_ENV: production',
      ),
      1 => 
      array (
        'heading' => 'Exam task',
        'body' => 'Create PVC 1Gi ReadWriteOnce — mount Deployment volume.',
        'code' => 'apiVersion: v1
kind: ConfigMap
metadata:
  name: ck-storage
data:
  APP_ENV: production',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿PVC?',
        'options' => 
        array (
          0 => 'Pod request storage',
          1 => 'Public cloud cert',
          2 => 'Password',
        ),
        'answer' => 'Pod request storage',
        'explanation' => 'Claim binds PV.',
        'pro_tip' => 'accessModes RWO vs RWX.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿emptyDir?',
        'options' => 
        array (
          0 => 'Ephemeral pod-local storage',
          1 => 'Permanent NAS',
          2 => 'S3',
        ),
        'answer' => 'Ephemeral pod-local storage',
        'explanation' => 'Shared containers pod.',
        'pro_tip' => 'Lost on pod delete.',
      ),
    ),
  ),
  4 => 
  array (
    'slug' => 'ck-troubleshoot',
    'order' => 5,
    'title' => 'Troubleshooting 30%',
    'level' => 'Avanzado',
    'minutes' => 45,
    'summary' => 'Debug pods, nodes, network.',
    'concepts' => 
    array (
      0 => 'debug',
      1 => 'logs',
      2 => 'events',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Debug toolkit',
        'body' => 'kubectl describe pod, logs, exec -it, get events — CrashLoopBackOff, ImagePullBackOff.',
        'code' => 'apiVersion: v1
kind: ConfigMap
metadata:
  name: ck-troubleshoot
data:
  APP_ENV: production',
      ),
      1 => 
      array (
        'heading' => 'Nodes',
        'body' => 'kubectl get nodes, describe node NotReady — kubelet, disk pressure.',
        'code' => 'apiVersion: v1
kind: ConfigMap
metadata:
  name: ck-troubleshoot
data:
  APP_ENV: production',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿CrashLoopBackOff?',
        'options' => 
        array (
          0 => 'Container exits repeatedly',
          1 => 'Success running',
          2 => 'Network OK',
        ),
        'answer' => 'Container exits repeatedly',
        'explanation' => 'Check logs previous.',
        'pro_tip' => 'kubectl logs --previous.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿ImagePullBackOff?',
        'options' => 
        array (
          0 => 'Wrong image name/registry auth',
          1 => 'CPU limit',
          2 => 'DNS OK',
        ),
        'answer' => 'Wrong image name/registry auth',
        'explanation' => 'Describe pod Events.',
        'pro_tip' => 'crictl on node CKA advanced.',
      ),
    ),
  ),
  5 => 
  array (
    'slug' => 'ck-exam',
    'order' => 6,
    'title' => 'Estrategia examen CKA',
    'level' => 'Producción',
    'minutes' => 30,
    'summary' => 'Time management y kubectl fluency.',
    'concepts' => 
    array (
      0 => 'strategy',
      1 => 'speed',
      2 => 'docs',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Exam strategy',
        'body' => 'Skip hard tasks — flag — docs.kubernetes.io allowed — bookmark common pages.',
        'code' => 'apiVersion: v1
kind: ConfigMap
metadata:
  name: ck-exam
data:
  APP_ENV: production',
      ),
      1 => 
      array (
        'heading' => 'Practice',
        'body' => 'Killer.sh, CKA prep courses — minikube/kind daily kubectl muscle memory.',
        'code' => 'apiVersion: v1
kind: ConfigMap
metadata:
  name: ck-exam
data:
  APP_ENV: production',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Docs en exam CKA?',
        'options' => 
        array (
          0 => 'kubernetes.io/docs permitido',
          1 => 'Closed book',
          2 => 'Google anything',
        ),
        'answer' => 'kubernetes.io/docs permitido',
        'explanation' => 'Know where to find fast.',
        'pro_tip' => 'Bookmark YAML examples.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Imperative vs declarative exam?',
        'options' => 
        array (
          0 => 'Ambos — dry-run -o yaml fastest',
          1 => 'Only helm',
          2 => 'Only terraform',
        ),
        'answer' => 'Ambos — dry-run -o yaml fastest',
        'explanation' => 'Generate YAML quick.',
        'pro_tip' => 'kubectl explain pod.spec.',
      ),
    ),
  ),
);
