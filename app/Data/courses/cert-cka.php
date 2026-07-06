<?php

declare(strict_types=1);

return [
    ['slug' => 'ck-intro', 'order' => 1, 'title' => 'CKA overview', 'level' => 'Conceptos', 'minutes' => 30, 'summary' => 'Certified Kubernetes Administrator.', 'concepts' => ['cka', 'kubernetes', 'cert'], 'sections' => [
        ['heading' => 'CKA', 'body' => '**CNCF Certified Kubernetes Administrator** — exam **práctico** terminal — 17 tasks, 2h, 66% pass — no multiple choice.'],
        ['heading' => 'Dominios', 'body' => 'Storage 10%, Workloads 30%, Networking 20%, Troubleshooting 30%, Cluster 10%.'],
    ], 'exercises' => [
        ['type' => 'choice', 'question' => '¿CKA exam tipo?', 'options' => ['Hands-on kubectl terminal', 'Multiple choice only', 'Essay'], 'answer' => 'Hands-on kubectl terminal', 'explanation' => 'Speed kubectl critical.', 'pro_tip' => 'Curso kubernetes prerequisite.'],
        ['type' => 'choice', 'question' => '¿kubectl alias exam?', 'options' => ['k=kubectl acelera — practice', 'Prohibido', 'Solo helm'], 'answer' => 'k=kubectl acelera — practice', 'explanation' => 'Save keystrokes 2h.', 'pro_tip' => 'kubectl completion bash.'],
    ]],
    ['slug' => 'ck-pods', 'order' => 2, 'title' => 'Pods y workloads', 'level' => 'Práctica', 'minutes' => 40, 'summary' => 'Create, debug, resources.', 'concepts' => ['pod', 'deployment', 'resources'], 'sections' => [
        ['heading' => 'Pods', 'body' => 'kubectl run --image=nginx --dry-run=client -o yaml — edit — apply -f pod.yaml'],
        ['heading' => 'Resources', 'body' => 'requests/limits CPU memory — OOMKilled si exceed memory limit.'],
    ], 'exercises' => [
        ['type' => 'choice', 'question' => '¿Deployment vs Pod direct?', 'options' => ['Deployment manages replicas rolling', 'Pod always production', 'Same'], 'answer' => 'Deployment manages replicas rolling', 'explanation' => 'Exam create Deployments.', 'pro_tip' => 'kubectl create deployment --image.'],
        ['type' => 'contains', 'question' => 'Escribe kubectl get pods', 'must_contain' => ['kubectl', 'pods'], 'hint' => 'kubectl get pods -A', 'explanation' => 'List all namespaces.', 'pro_tip' => '-o wide extra info.'],
    ]],
    ['slug' => 'ck-services', 'order' => 3, 'title' => 'Services y networking', 'level' => 'Práctica', 'minutes' => 40, 'summary' => 'ClusterIP, NodePort, Ingress, DNS.', 'concepts' => ['service', 'ingress', 'dns'], 'sections' => [
        ['heading' => 'Services', 'body' => 'ClusterIP internal, NodePort external port, LoadBalancer cloud LB.'],
        ['heading' => 'DNS', 'body' => 'my-svc.my-namespace.svc.cluster.local — CoreDNS.'],
    ], 'exercises' => [
        ['type' => 'choice', 'question' => '¿ClusterIP?', 'options' => ['Internal cluster only', 'Public internet always', 'No IP'], 'answer' => 'Internal cluster only', 'explanation' => 'Default Service type.', 'pro_tip' => 'Ingress HTTP routing.'],
        ['type' => 'choice', 'question' => '¿kube-dns/CoreDNS?', 'options' => ['Service discovery names', 'External DNS only', 'Database'], 'answer' => 'Service discovery names', 'explanation' => 'Pods resolve services.', 'pro_tip' => 'Curso nginx-proxy compare.'],
    ]],
    ['slug' => 'ck-storage', 'order' => 4, 'title' => 'Storage CKA', 'level' => 'Intermedio', 'minutes' => 35, 'summary' => 'PV, PVC, StorageClass.', 'concepts' => ['pv', 'pvc', 'storageclass'], 'sections' => [
        ['heading' => 'PersistentVolume', 'body' => 'PV cluster resource — PVC pod claim — StorageClass dynamic provision.'],
        ['heading' => 'Exam task', 'body' => 'Create PVC 1Gi ReadWriteOnce — mount Deployment volume.'],
    ], 'exercises' => [
        ['type' => 'choice', 'question' => '¿PVC?', 'options' => ['Pod request storage', 'Public cloud cert', 'Password'], 'answer' => 'Pod request storage', 'explanation' => 'Claim binds PV.', 'pro_tip' => 'accessModes RWO vs RWX.'],
        ['type' => 'choice', 'question' => '¿emptyDir?', 'options' => ['Ephemeral pod-local storage', 'Permanent NAS', 'S3'], 'answer' => 'Ephemeral pod-local storage', 'explanation' => 'Shared containers pod.', 'pro_tip' => 'Lost on pod delete.'],
    ]],
    ['slug' => 'ck-troubleshoot', 'order' => 5, 'title' => 'Troubleshooting 30%', 'level' => 'Avanzado', 'minutes' => 45, 'summary' => 'Debug pods, nodes, network.', 'concepts' => ['debug', 'logs', 'events'], 'sections' => [
        ['heading' => 'Debug toolkit', 'body' => 'kubectl describe pod, logs, exec -it, get events — CrashLoopBackOff, ImagePullBackOff.'],
        ['heading' => 'Nodes', 'body' => 'kubectl get nodes, describe node NotReady — kubelet, disk pressure.'],
    ], 'exercises' => [
        ['type' => 'choice', 'question' => '¿CrashLoopBackOff?', 'options' => ['Container exits repeatedly', 'Success running', 'Network OK'], 'answer' => 'Container exits repeatedly', 'explanation' => 'Check logs previous.', 'pro_tip' => 'kubectl logs --previous.'],
        ['type' => 'choice', 'question' => '¿ImagePullBackOff?', 'options' => ['Wrong image name/registry auth', 'CPU limit', 'DNS OK'], 'answer' => 'Wrong image name/registry auth', 'explanation' => 'Describe pod Events.', 'pro_tip' => 'crictl on node CKA advanced.'],
    ]],
    ['slug' => 'ck-exam', 'order' => 6, 'title' => 'Estrategia examen CKA', 'level' => 'Producción', 'minutes' => 30, 'summary' => 'Time management y kubectl fluency.', 'concepts' => ['strategy', 'speed', 'docs'], 'sections' => [
        ['heading' => 'Exam strategy', 'body' => 'Skip hard tasks — flag — docs.kubernetes.io allowed — bookmark common pages.'],
        ['heading' => 'Practice', 'body' => 'Killer.sh, CKA prep courses — minikube/kind daily kubectl muscle memory.'],
    ], 'exercises' => [
        ['type' => 'choice', 'question' => '¿Docs en exam CKA?', 'options' => ['kubernetes.io/docs permitido', 'Closed book', 'Google anything'], 'answer' => 'kubernetes.io/docs permitido', 'explanation' => 'Know where to find fast.', 'pro_tip' => 'Bookmark YAML examples.'],
        ['type' => 'choice', 'question' => '¿Imperative vs declarative exam?', 'options' => ['Ambos — dry-run -o yaml fastest', 'Only helm', 'Only terraform'], 'answer' => 'Ambos — dry-run -o yaml fastest', 'explanation' => 'Generate YAML quick.', 'pro_tip' => 'kubectl explain pod.spec.'],
    ]],
];
