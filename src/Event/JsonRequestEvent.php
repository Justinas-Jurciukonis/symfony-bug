<?php

declare(strict_types=1);

namespace App\Event;

use Symfony\Component\EventDispatcher\Attribute\AsEventListener;
use Symfony\Component\HttpKernel\Event\KernelEvent;
use Symfony\Component\HttpKernel\KernelEvents;

#[AsEventListener(KernelEvents::REQUEST)]
class JsonRequestEvent
{
    public function __invoke(KernelEvent $event): void
    {
        $request = $event->getRequest();

        if ($request->getContentTypeFormat() === 'json' && $request->getContent()) {
            $data = json_decode($request->getContent(), associative: true);

            if (is_array($data)) {
                $request->request->replace($data);
            }
        }
    }
}
