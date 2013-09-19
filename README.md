JS-UIX Networking
==================


<a href="http://www.masswerk.at/index.html">Masswerk</a> brought us the amazing JSUIX operating system.


I figured it would be fun to write an in-browser virtual networking protocol for JSUIX that includes:

1. Physical separation between JSUIX isntances through windows or (in this case) &lt;iframe&gt;s
2. DNS tables
3. URI parsing
4. 3-way handshake authentication
5. Common UNIX network applications (e.g. curl, ping, wget, maybe... lynx?)
6. An HTTP server
7. Maybe an SMTP server
8. Network protocol for accessing real HTTP (through JSON-P or something)
9. Perhaps most importantly, das blinkenlichten

URIs/URLs use my own networking protocol called vip:// (virtual internet protocol, not the actual VPN stuff)


My files are:
- jsuix_net.js
- jsuix_router.js
