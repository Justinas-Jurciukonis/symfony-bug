`./request.sh` is cUrl request that I am using to send requests. In general it's modified SPA request.

Payload must except only float, but allow to send `int`, `float`, `string`:

 - `0`
 - `0.0`
 - `"0"`

---

`./src/Event/JsonRequestEvent` custom handling of Content-Type "application/json"

---

`./src/Controller/FooController` sample controller
