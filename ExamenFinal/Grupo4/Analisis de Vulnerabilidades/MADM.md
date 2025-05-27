<h2>:mag: Vulnerabilities of <code>phpmyadmin:latest</code></h2>

<details open="true"><summary>:package: Image Reference</strong> <code>phpmyadmin:latest</code></summary>
<table>
<tr><td>digest</td><td><code>sha256:b3e51f0e2934f0b7c7bcf6909db5c927d0be7354c19022201f96fb28e8707cf5</code></td><tr><tr><td>vulnerabilities</td><td><img alt="critical: 0" src="https://img.shields.io/badge/critical-0-lightgrey"/> <img alt="high: 3" src="https://img.shields.io/badge/high-3-e25d68"/> <img alt="medium: 1" src="https://img.shields.io/badge/medium-1-fbb552"/> <img alt="low: 73" src="https://img.shields.io/badge/low-73-fce1a9"/> <!-- unspecified: 0 --></td></tr>
<tr><td>platform</td><td>linux/amd64</td></tr>
<tr><td>size</td><td>196 MB</td></tr>
<tr><td>packages</td><td>350</td></tr>
</table>
</details></table>
</details>

<table>
<tr><td valign="top">
<details><summary><img alt="critical: 0" src="https://img.shields.io/badge/C-0-lightgrey"/> <img alt="high: 3" src="https://img.shields.io/badge/H-3-e25d68"/> <img alt="medium: 0" src="https://img.shields.io/badge/M-0-lightgrey"/> <img alt="low: 3" src="https://img.shields.io/badge/L-3-fce1a9"/> <!-- unspecified: 0 --><strong>libxml2</strong> <code>2.9.14+dfsg-1.3~deb12u1</code> (deb)</summary>

<small><code>pkg:deb/debian/libxml2@2.9.14%2Bdfsg-1.3~deb12u1?os_distro=bookworm&os_name=debian&os_version=12</code></small><br/>

```dockerfile
# apache/Dockerfile (0:0)

```

<br/>

<a href="https://scout.docker.com/v/CVE-2022-49043?s=debian&n=libxml2&ns=debian&t=deb&osn=debian&osv=12&vr=%3E%3D2.9.14%2Bdfsg-1.3%7Edeb12u1"><img alt="high : CVE--2022--49043" src="https://img.shields.io/badge/CVE--2022--49043-lightgrey?label=high%20&labelColor=e25d68"/></a> 

<table>
<tr><td>Affected range</td><td><code>>=2.9.14+dfsg-1.3~deb12u1</code></td></tr>
<tr><td>Fixed version</td><td><strong>Not Fixed</strong></td></tr>
<tr><td>EPSS Score</td><td><code>0.024%</code></td></tr>
<tr><td>EPSS Percentile</td><td><code>5th percentile</code></td></tr>
</table>

<details><summary>Description</summary>
<blockquote>

xmlXIncludeAddNode in xinclude.c in libxml2 before 2.11.0 has a use-after-free.

---
[experimental] - libxml2 2.12.3+dfsg-0exp1
- libxml2 2.12.7+dfsg+really2.9.14-0.4 (bug https://bugs.debian.org/cgi-bin/bugreport.cgi?bug=1094238)
Fixed by: https://gitlab.gnome.org/GNOME/libxml2/-/commit/5a19e21605398cef6a8b1452477a8705cb41562b (v2.11.0)
https://github.com/php/php-src/issues/17467

</blockquote>
</details>

<a href="https://scout.docker.com/v/CVE-2025-24928?s=debian&n=libxml2&ns=debian&t=deb&osn=debian&osv=12&vr=%3E%3D2.9.14%2Bdfsg-1.3%7Edeb12u1"><img alt="high : CVE--2025--24928" src="https://img.shields.io/badge/CVE--2025--24928-lightgrey?label=high%20&labelColor=e25d68"/></a> 

<table>
<tr><td>Affected range</td><td><code>>=2.9.14+dfsg-1.3~deb12u1</code></td></tr>
<tr><td>Fixed version</td><td><strong>Not Fixed</strong></td></tr>
<tr><td>EPSS Score</td><td><code>0.007%</code></td></tr>
<tr><td>EPSS Percentile</td><td><code>0th percentile</code></td></tr>
</table>

<details><summary>Description</summary>
<blockquote>

libxml2 before 2.12.10 and 2.13.x before 2.13.6 has a stack-based buffer overflow in xmlSnprintfElements in valid.c. To exploit this, DTD validation must occur for an untrusted document or untrusted DTD. NOTE: this is similar to CVE-2017-9047.

---
- libxml2 2.12.7+dfsg+really2.9.14-0.4 (bug https://bugs.debian.org/cgi-bin/bugreport.cgi?bug=1098321)
https://gitlab.gnome.org/GNOME/libxml2/-/issues/847
https://www.openwall.com/lists/oss-security/2025/02/18/2
Fixed by: https://gitlab.gnome.org/GNOME/libxml2/-/commit/8c8753ad5280ee13aee5eec9b0f6eee2ed920f57
Fixed by: https://gitlab.gnome.org/GNOME/libxml2/-/commit/858ca26c0689161a6b903a6682cc8a1cc10a0ea8 (v2.12.10)

</blockquote>
</details>

<a href="https://scout.docker.com/v/CVE-2024-56171?s=debian&n=libxml2&ns=debian&t=deb&osn=debian&osv=12&vr=%3E%3D2.9.14%2Bdfsg-1.3%7Edeb12u1"><img alt="high : CVE--2024--56171" src="https://img.shields.io/badge/CVE--2024--56171-lightgrey?label=high%20&labelColor=e25d68"/></a> 

<table>
<tr><td>Affected range</td><td><code>>=2.9.14+dfsg-1.3~deb12u1</code></td></tr>
<tr><td>Fixed version</td><td><strong>Not Fixed</strong></td></tr>
<tr><td>EPSS Score</td><td><code>0.007%</code></td></tr>
<tr><td>EPSS Percentile</td><td><code>0th percentile</code></td></tr>
</table>

<details><summary>Description</summary>
<blockquote>

libxml2 before 2.12.10 and 2.13.x before 2.13.6 has a use-after-free in xmlSchemaIDCFillNodeTables and xmlSchemaBubbleIDCNodeTables in xmlschemas.c. To exploit this, a crafted XML document must be validated against an XML schema with certain identity constraints, or a crafted XML schema must be used.

---
- libxml2 2.12.7+dfsg+really2.9.14-0.4 (bug https://bugs.debian.org/cgi-bin/bugreport.cgi?bug=1098320)
https://gitlab.gnome.org/GNOME/libxml2/-/issues/828
https://www.openwall.com/lists/oss-security/2025/02/18/2
Fixed by: https://gitlab.gnome.org/GNOME/libxml2/-/commit/5880a9a6bd97c0f9ac8fc4f30110fe023f484746
Fixed by: https://gitlab.gnome.org/GNOME/libxml2/-/commit/245b70d7d2768572ae1b05b3668ca858b9ec4ed4 (v2.12.10)

</blockquote>
</details>

<a href="https://scout.docker.com/v/CVE-2025-32415?s=debian&n=libxml2&ns=debian&t=deb&osn=debian&osv=12&vr=%3E%3D2.9.14%2Bdfsg-1.3%7Edeb12u1"><img alt="low : CVE--2025--32415" src="https://img.shields.io/badge/CVE--2025--32415-lightgrey?label=low%20&labelColor=fce1a9"/></a> 

<table>
<tr><td>Affected range</td><td><code>>=2.9.14+dfsg-1.3~deb12u1</code></td></tr>
<tr><td>Fixed version</td><td><strong>Not Fixed</strong></td></tr>
<tr><td>EPSS Score</td><td><code>0.020%</code></td></tr>
<tr><td>EPSS Percentile</td><td><code>4th percentile</code></td></tr>
</table>

<details><summary>Description</summary>
<blockquote>

In libxml2 before 2.13.8 and 2.14.x before 2.14.2, xmlSchemaIDCFillNodeTables in xmlschemas.c has a heap-based buffer under-read. To exploit this, a crafted XML document must be validated against an XML schema with certain identity constraints, or a crafted XML schema must be used.

---
- libxml2 2.12.7+dfsg+really2.9.14-1 (bug https://bugs.debian.org/cgi-bin/bugreport.cgi?bug=1103511)
https://gitlab.gnome.org/GNOME/libxml2/-/issues/890
Fixed by: https://gitlab.gnome.org/GNOME/libxml2/-/commit/487ee1d8711c6415218b373ef455fcd969d12399 (master)
Fixed by: https://gitlab.gnome.org/GNOME/libxml2/-/commit/8ac33b1c821b4e67326e8e416945b31c9537c7c0 (v2.14.2)
Fixed by: https://gitlab.gnome.org/GNOME/libxml2/-/commit/384cc7c182fc00c6d5e2ab4b5e3671b2e3f93c84 (v2.13.8)

</blockquote>
</details>

<a href="https://scout.docker.com/v/CVE-2025-27113?s=debian&n=libxml2&ns=debian&t=deb&osn=debian&osv=12&vr=%3E%3D2.9.14%2Bdfsg-1.3%7Edeb12u1"><img alt="low : CVE--2025--27113" src="https://img.shields.io/badge/CVE--2025--27113-lightgrey?label=low%20&labelColor=fce1a9"/></a> 

<table>
<tr><td>Affected range</td><td><code>>=2.9.14+dfsg-1.3~deb12u1</code></td></tr>
<tr><td>Fixed version</td><td><strong>Not Fixed</strong></td></tr>
<tr><td>EPSS Score</td><td><code>0.050%</code></td></tr>
<tr><td>EPSS Percentile</td><td><code>15th percentile</code></td></tr>
</table>

<details><summary>Description</summary>
<blockquote>

libxml2 before 2.12.10 and 2.13.x before 2.13.6 has a NULL pointer dereference in xmlPatMatch in pattern.c.

---
- libxml2 2.12.7+dfsg+really2.9.14-0.4 (bug https://bugs.debian.org/cgi-bin/bugreport.cgi?bug=1098322)
https://gitlab.gnome.org/GNOME/libxml2/-/issues/861
https://www.openwall.com/lists/oss-security/2025/02/18/2
Fixed by: https://gitlab.gnome.org/GNOME/libxml2/-/commit/6c716d491dd2e67f08066f4dc0619efeb49e43e6
Fixed by: https://gitlab.gnome.org/GNOME/libxml2/-/commit/503f788e84f1c1f1d769c2c7258d77faee94b5a3 (v2.12.10)

</blockquote>
</details>

<a href="https://scout.docker.com/v/CVE-2024-34459?s=debian&n=libxml2&ns=debian&t=deb&osn=debian&osv=12&vr=%3E%3D2.9.14%2Bdfsg-1.3%7Edeb12u1"><img alt="low : CVE--2024--34459" src="https://img.shields.io/badge/CVE--2024--34459-lightgrey?label=low%20&labelColor=fce1a9"/></a> 

<table>
<tr><td>Affected range</td><td><code>>=2.9.14+dfsg-1.3~deb12u1</code></td></tr>
<tr><td>Fixed version</td><td><strong>Not Fixed</strong></td></tr>
<tr><td>EPSS Score</td><td><code>0.139%</code></td></tr>
<tr><td>EPSS Percentile</td><td><code>35th percentile</code></td></tr>
</table>

<details><summary>Description</summary>
<blockquote>

An issue was discovered in xmllint (from libxml2) before 2.11.8 and 2.12.x before 2.12.7. Formatting error messages with xmllint --htmlout can result in a buffer over-read in xmlHTMLPrintFileContext in xmllint.c.

---
- libxml2 2.12.7+dfsg+really2.9.14-0.4 (unimportant; bug https://bugs.debian.org/cgi-bin/bugreport.cgi?bug=1071162)
https://gitlab.gnome.org/GNOME/libxml2/-/issues/720
Fixed by: https://gitlab.gnome.org/GNOME/libxml2/-/commit/8ddc7f13337c9fe7c6b6e616f404b0fffb8a5145 (v2.11.8)
Fixed by: https://gitlab.gnome.org/GNOME/libxml2/-/commit/2876ac5392a4e891b81e40e592c3ac6cb46016ce (v2.12.7)
Crash in CLI tool, no security impact

</blockquote>
</details>
</details></td></tr>

<tr><td valign="top">
<details><summary><img alt="critical: 0" src="https://img.shields.io/badge/C-0-lightgrey"/> <img alt="high: 0" src="https://img.shields.io/badge/H-0-lightgrey"/> <img alt="medium: 1" src="https://img.shields.io/badge/M-1-fbb552"/> <img alt="low: 0" src="https://img.shields.io/badge/L-0-lightgrey"/> <!-- unspecified: 0 --><strong>slim/psr7</strong> <code>1.4.1</code> (composer)</summary>

<small><code>pkg:composer/slim/psr7@1.4.1</code></small><br/>

```dockerfile
# apache/Dockerfile (116:138)
RUN set -ex; \
    export GNUPGHOME="$(mktemp -d)"; \
    export GPGKEY="3D06A59ECE730EB71B511C17CE752F178259BD92"; \
    curl -fsSL -o phpMyAdmin.tar.xz $URL; \
    curl -fsSL -o phpMyAdmin.tar.xz.asc $URL.asc; \
    echo "$SHA256 *phpMyAdmin.tar.xz" | sha256sum -c -; \
    gpg --batch --keyserver keyserver.ubuntu.com --recv-keys "$GPGKEY" \
        || gpg --batch --keyserver pgp.mit.edu --recv-keys "$GPGKEY" \
        || gpg --batch --keyserver keyserver.pgp.com --recv-keys "$GPGKEY" \
        || gpg --batch --keyserver keys.openpgp.org --recv-keys "$GPGKEY"; \
    gpg --batch --verify phpMyAdmin.tar.xz.asc phpMyAdmin.tar.xz; \
    tar -xf phpMyAdmin.tar.xz -C /var/www/html --strip-components=1; \
    mkdir -p /var/www/html/tmp; \
    gpgconf --kill all; \
    rm -r "$GNUPGHOME" phpMyAdmin.tar.xz phpMyAdmin.tar.xz.asc; \
    rm -r -v /var/www/html/setup/ /var/www/html/examples/ /var/www/html/js/src/ /var/www/html/babel.config.json /var/www/html/doc/html/_sources/ /var/www/html/RELEASE-DATE-$VERSION /var/www/html/CONTRIBUTING.md; \
    grep -q -F "'configFile' => ROOT_PATH . 'config.inc.php'," /var/www/html/libraries/vendor_config.php; \
    sed -i "s@'configFile' => .*@'configFile' => '/etc/phpmyadmin/config.inc.php',@" /var/www/html/libraries/vendor_config.php; \
    grep -q -F "'configFile' => '/etc/phpmyadmin/config.inc.php'," /var/www/html/libraries/vendor_config.php; \
    php -l /var/www/html/libraries/vendor_config.php; \
    find /var/www/html -type d -exec chmod 555 {} \;; \
    find /var/www/html -type f -exec chmod 444 {} \;; \
    chmod 1777 /var/www/html/tmp;
```

<br/>

<a href="https://scout.docker.com/v/CVE-2023-30536?s=gitlab&n=psr7&ns=slim&t=composer&vr=%3C1.6.1"><img alt="medium 6.5: CVE--2023--30536" src="https://img.shields.io/badge/CVE--2023--30536-lightgrey?label=medium%206.5&labelColor=fbb552"/></a> <i>OWASP Top Ten 2017 Category A9 - Using Components with Known Vulnerabilities</i>

<table>
<tr><td>Affected range</td><td><code><1.6.1</code></td></tr>
<tr><td>Fixed version</td><td><code>1.6.1</code></td></tr>
<tr><td>CVSS Score</td><td><code>6.5</code></td></tr>
<tr><td>CVSS Vector</td><td><code>CVSS:3.1/AV:N/AC:L/PR:N/UI:N/S:U/C:N/I:L/A:L</code></td></tr>
<tr><td>EPSS Score</td><td><code>0.105%</code></td></tr>
<tr><td>EPSS Percentile</td><td><code>30th percentile</code></td></tr>
</table>

<details><summary>Description</summary>
<blockquote>

slim/psr7 is a PSR-7 implementation for use with Slim 4. In versions prior to 1.6.1 an attacker could sneak in a newline (\n) into both the header names and values. While the specification states that \r\n\r\n is used to terminate the header list, many servers in the wild will also accept \n\n. An attacker that is able to control the header names that are passed to Slilm-Psr7 would be able to intentionally craft invalid messages, possibly causing application errors or invalid HTTP requests being sent out with an PSR-18 HTTP client. The latter might present a denial of service vector if a remote service’s web application firewall bans the application due to the receipt of malformed requests. The issue has been patched in version 1.6.1. There are no known workarounds to this issue. Users are advised to upgrade.

</blockquote>
</details>
</details></td></tr>

<tr><td valign="top">
<details><summary><img alt="critical: 0" src="https://img.shields.io/badge/C-0-lightgrey"/> <img alt="high: 0" src="https://img.shields.io/badge/H-0-lightgrey"/> <img alt="medium: 0" src="https://img.shields.io/badge/M-0-lightgrey"/> <img alt="low: 23" src="https://img.shields.io/badge/L-23-fce1a9"/> <!-- unspecified: 0 --><strong>binutils</strong> <code>2.40-2</code> (deb)</summary>

<small><code>pkg:deb/debian/binutils@2.40-2?os_distro=bookworm&os_name=debian&os_version=12</code></small><br/>

```dockerfile
# apache/Dockerfile (0:0)

```

<br/>

<a href="https://scout.docker.com/v/CVE-2025-3198?s=debian&n=binutils&ns=debian&t=deb&osn=debian&osv=12&vr=%3E%3D2.40-2"><img alt="low : CVE--2025--3198" src="https://img.shields.io/badge/CVE--2025--3198-lightgrey?label=low%20&labelColor=fce1a9"/></a> 

<table>
<tr><td>Affected range</td><td><code>>=2.40-2</code></td></tr>
<tr><td>Fixed version</td><td><strong>Not Fixed</strong></td></tr>
<tr><td>EPSS Score</td><td><code>0.014%</code></td></tr>
<tr><td>EPSS Percentile</td><td><code>2nd percentile</code></td></tr>
</table>

<details><summary>Description</summary>
<blockquote>

A vulnerability has been found in GNU Binutils 2.43/2.44 and classified as problematic. Affected by this vulnerability is the function display_info of the file binutils/bucomm.c of the component objdump. The manipulation leads to memory leak. An attack has to be approached locally. The exploit has been disclosed to the public and may be used. The patch is named ba6ad3a18cb26b79e0e3b84c39f707535bbc344d. It is recommended to apply a patch to fix this issue.

---
- binutils <unfixed> (unimportant)
https://sourceware.org/bugzilla/show_bug.cgi?id=32716
https://sourceware.org/git/gitweb.cgi?p=binutils-gdb.git;h=ba6ad3a18cb26b79e0e3b84c39f707535bbc344d
binutils not covered by security support

</blockquote>
</details>

<a href="https://scout.docker.com/v/CVE-2025-1182?s=debian&n=binutils&ns=debian&t=deb&osn=debian&osv=12&vr=%3E%3D2.40-2"><img alt="low : CVE--2025--1182" src="https://img.shields.io/badge/CVE--2025--1182-lightgrey?label=low%20&labelColor=fce1a9"/></a> 

<table>
<tr><td>Affected range</td><td><code>>=2.40-2</code></td></tr>
<tr><td>Fixed version</td><td><strong>Not Fixed</strong></td></tr>
<tr><td>EPSS Score</td><td><code>0.092%</code></td></tr>
<tr><td>EPSS Percentile</td><td><code>27th percentile</code></td></tr>
</table>

<details><summary>Description</summary>
<blockquote>

A vulnerability, which was classified as critical, was found in GNU Binutils 2.43. Affected is the function bfd_elf_reloc_symbol_deleted_p of the file bfd/elflink.c of the component ld. The manipulation leads to memory corruption. It is possible to launch the attack remotely. The complexity of an attack is rather high. The exploitability is told to be difficult. The exploit has been disclosed to the public and may be used. The patch is identified as b425859021d17adf62f06fb904797cf8642986ad. It is recommended to apply a patch to fix this issue.

---
- binutils <unfixed> (unimportant)
https://sourceware.org/bugzilla/show_bug.cgi?id=32644
https://sourceware.org/git/gitweb.cgi?p=binutils-gdb.git;h=b425859021d17adf62f06fb904797cf8642986ad
binutils not covered by security support

</blockquote>
</details>

<a href="https://scout.docker.com/v/CVE-2025-1181?s=debian&n=binutils&ns=debian&t=deb&osn=debian&osv=12&vr=%3E%3D2.40-2"><img alt="low : CVE--2025--1181" src="https://img.shields.io/badge/CVE--2025--1181-lightgrey?label=low%20&labelColor=fce1a9"/></a> 

<table>
<tr><td>Affected range</td><td><code>>=2.40-2</code></td></tr>
<tr><td>Fixed version</td><td><strong>Not Fixed</strong></td></tr>
<tr><td>EPSS Score</td><td><code>0.144%</code></td></tr>
<tr><td>EPSS Percentile</td><td><code>36th percentile</code></td></tr>
</table>

<details><summary>Description</summary>
<blockquote>

A vulnerability classified as critical was found in GNU Binutils 2.43. This vulnerability affects the function _bfd_elf_gc_mark_rsec of the file bfd/elflink.c of the component ld. The manipulation leads to memory corruption. The attack can be initiated remotely. The complexity of an attack is rather high. The exploitation appears to be difficult. The exploit has been disclosed to the public and may be used. The name of the patch is 931494c9a89558acb36a03a340c01726545eef24. It is recommended to apply a patch to fix this issue.

---
- binutils <unfixed> (unimportant)
https://sourceware.org/bugzilla/show_bug.cgi?id=32643
https://sourceware.org/git/gitweb.cgi?p=binutils-gdb.git;h=931494c9a89558acb36a03a340c01726545eef24
binutils not covered by security support

</blockquote>
</details>

<a href="https://scout.docker.com/v/CVE-2025-1180?s=debian&n=binutils&ns=debian&t=deb&osn=debian&osv=12&vr=%3E%3D2.40-2"><img alt="low : CVE--2025--1180" src="https://img.shields.io/badge/CVE--2025--1180-lightgrey?label=low%20&labelColor=fce1a9"/></a> 

<table>
<tr><td>Affected range</td><td><code>>=2.40-2</code></td></tr>
<tr><td>Fixed version</td><td><strong>Not Fixed</strong></td></tr>
<tr><td>EPSS Score</td><td><code>0.098%</code></td></tr>
<tr><td>EPSS Percentile</td><td><code>29th percentile</code></td></tr>
</table>

<details><summary>Description</summary>
<blockquote>

A vulnerability classified as problematic has been found in GNU Binutils 2.43. This affects the function _bfd_elf_write_section_eh_frame of the file bfd/elf-eh-frame.c of the component ld. The manipulation leads to memory corruption. It is possible to initiate the attack remotely. The complexity of an attack is rather high. The exploitability is told to be difficult. The exploit has been disclosed to the public and may be used. It is recommended to apply a patch to fix this issue.

---
- binutils <unfixed> (unimportant)
https://sourceware.org/bugzilla/show_bug.cgi?id=32642
binutils not covered by security support

</blockquote>
</details>

<a href="https://scout.docker.com/v/CVE-2025-1179?s=debian&n=binutils&ns=debian&t=deb&osn=debian&osv=12&vr=%3E%3D2.40-2"><img alt="low : CVE--2025--1179" src="https://img.shields.io/badge/CVE--2025--1179-lightgrey?label=low%20&labelColor=fce1a9"/></a> 

<table>
<tr><td>Affected range</td><td><code>>=2.40-2</code></td></tr>
<tr><td>Fixed version</td><td><strong>Not Fixed</strong></td></tr>
<tr><td>EPSS Score</td><td><code>0.107%</code></td></tr>
<tr><td>EPSS Percentile</td><td><code>30th percentile</code></td></tr>
</table>

<details><summary>Description</summary>
<blockquote>

A vulnerability was found in GNU Binutils 2.43. It has been rated as critical. Affected by this issue is the function bfd_putl64 of the file bfd/libbfd.c of the component ld. The manipulation leads to memory corruption. The attack may be launched remotely. The complexity of an attack is rather high. The exploitation is known to be difficult. The exploit has been disclosed to the public and may be used. Upgrading to version 2.44 is able to address this issue. It is recommended to upgrade the affected component. The code maintainer explains, that "[t]his bug has been fixed at some point between the 2.43 and 2.44 releases".

---
- binutils 2.44-1 (unimportant)
https://sourceware.org/bugzilla/show_bug.cgi?id=32640
binutils not covered by security support
No exact commits pinpointed, but upstream confirms this fixed in 2.44

</blockquote>
</details>

<a href="https://scout.docker.com/v/CVE-2025-1178?s=debian&n=binutils&ns=debian&t=deb&osn=debian&osv=12&vr=%3E%3D2.40-2"><img alt="low : CVE--2025--1178" src="https://img.shields.io/badge/CVE--2025--1178-lightgrey?label=low%20&labelColor=fce1a9"/></a> 

<table>
<tr><td>Affected range</td><td><code>>=2.40-2</code></td></tr>
<tr><td>Fixed version</td><td><strong>Not Fixed</strong></td></tr>
<tr><td>EPSS Score</td><td><code>0.138%</code></td></tr>
<tr><td>EPSS Percentile</td><td><code>35th percentile</code></td></tr>
</table>

<details><summary>Description</summary>
<blockquote>

A vulnerability was found in GNU Binutils 2.43. It has been declared as problematic. Affected by this vulnerability is the function bfd_putl64 of the file libbfd.c of the component ld. The manipulation leads to memory corruption. The attack can be launched remotely. The complexity of an attack is rather high. The exploitation appears to be difficult. The exploit has been disclosed to the public and may be used. The identifier of the patch is 75086e9de1707281172cc77f178e7949a4414ed0. It is recommended to apply a patch to fix this issue.

---
- binutils <unfixed> (unimportant)
https://sourceware.org/bugzilla/show_bug.cgi?id=32638
https://sourceware.org/git/gitweb.cgi?p=binutils-gdb.git;h=75086e9de1707281172cc77f178e7949a4414ed0
binutils not covered by security support

</blockquote>
</details>

<a href="https://scout.docker.com/v/CVE-2025-1176?s=debian&n=binutils&ns=debian&t=deb&osn=debian&osv=12&vr=%3E%3D2.40-2"><img alt="low : CVE--2025--1176" src="https://img.shields.io/badge/CVE--2025--1176-lightgrey?label=low%20&labelColor=fce1a9"/></a> 

<table>
<tr><td>Affected range</td><td><code>>=2.40-2</code></td></tr>
<tr><td>Fixed version</td><td><strong>Not Fixed</strong></td></tr>
<tr><td>EPSS Score</td><td><code>0.107%</code></td></tr>
<tr><td>EPSS Percentile</td><td><code>30th percentile</code></td></tr>
</table>

<details><summary>Description</summary>
<blockquote>

A vulnerability was found in GNU Binutils 2.43 and classified as critical. This issue affects the function _bfd_elf_gc_mark_rsec of the file elflink.c of the component ld. The manipulation leads to heap-based buffer overflow. The attack may be initiated remotely. The complexity of an attack is rather high. The exploitation is known to be difficult. The exploit has been disclosed to the public and may be used. The patch is named f9978defb6fab0bd8583942d97c112b0932ac814. It is recommended to apply a patch to fix this issue.

---
- binutils <unfixed> (unimportant)
https://sourceware.org/bugzilla/show_bug.cgi?id=32636
https://sourceware.org/git/gitweb.cgi?p=binutils-gdb.git;h=f9978defb6fab0bd8583942d97c112b0932ac814
binutils not covered by security support

</blockquote>
</details>

<a href="https://scout.docker.com/v/CVE-2025-1153?s=debian&n=binutils&ns=debian&t=deb&osn=debian&osv=12&vr=%3E%3D2.40-2"><img alt="low : CVE--2025--1153" src="https://img.shields.io/badge/CVE--2025--1153-lightgrey?label=low%20&labelColor=fce1a9"/></a> 

<table>
<tr><td>Affected range</td><td><code>>=2.40-2</code></td></tr>
<tr><td>Fixed version</td><td><strong>Not Fixed</strong></td></tr>
<tr><td>EPSS Score</td><td><code>0.125%</code></td></tr>
<tr><td>EPSS Percentile</td><td><code>33rd percentile</code></td></tr>
</table>

<details><summary>Description</summary>
<blockquote>

A vulnerability classified as problematic was found in GNU Binutils 2.43/2.44. Affected by this vulnerability is the function bfd_set_format of the file format.c. The manipulation leads to memory corruption. The attack can be launched remotely. The complexity of an attack is rather high. The exploitation appears to be difficult. Upgrading to version 2.45 is able to address this issue. The identifier of the patch is 8d97c1a53f3dc9fd8e1ccdb039b8a33d50133150. It is recommended to upgrade the affected component.

---
- binutils <unfixed> (unimportant)
https://sourceware.org/bugzilla/show_bug.cgi?id=32603
https://sourceware.org/git/gitweb.cgi?p=binutils-gdb.git;h=8d97c1a53f3dc9fd8e1ccdb039b8a33d50133150
binutils not covered by security support

</blockquote>
</details>

<a href="https://scout.docker.com/v/CVE-2025-1152?s=debian&n=binutils&ns=debian&t=deb&osn=debian&osv=12&vr=%3E%3D2.40-2"><img alt="low : CVE--2025--1152" src="https://img.shields.io/badge/CVE--2025--1152-lightgrey?label=low%20&labelColor=fce1a9"/></a> 

<table>
<tr><td>Affected range</td><td><code>>=2.40-2</code></td></tr>
<tr><td>Fixed version</td><td><strong>Not Fixed</strong></td></tr>
<tr><td>EPSS Score</td><td><code>0.059%</code></td></tr>
<tr><td>EPSS Percentile</td><td><code>19th percentile</code></td></tr>
</table>

<details><summary>Description</summary>
<blockquote>

A vulnerability classified as problematic has been found in GNU Binutils 2.43. Affected is the function xstrdup of the file xstrdup.c of the component ld. The manipulation leads to memory leak. It is possible to launch the attack remotely. The complexity of an attack is rather high. The exploitability is told to be difficult. The exploit has been disclosed to the public and may be used. It is recommended to apply a patch to fix this issue. The code maintainer explains: "I'm not going to commit some of the leak fixes I've been working on to the 2.44 branch due to concern that would destabilise ld. All of the reported leaks in this bugzilla have been fixed on binutils master."

---
- binutils <unfixed> (unimportant)
https://sourceware.org/bugzilla/show_bug.cgi?id=32576
binutils not covered by security support

</blockquote>
</details>

<a href="https://scout.docker.com/v/CVE-2025-1151?s=debian&n=binutils&ns=debian&t=deb&osn=debian&osv=12&vr=%3E%3D2.40-2"><img alt="low : CVE--2025--1151" src="https://img.shields.io/badge/CVE--2025--1151-lightgrey?label=low%20&labelColor=fce1a9"/></a> 

<table>
<tr><td>Affected range</td><td><code>>=2.40-2</code></td></tr>
<tr><td>Fixed version</td><td><strong>Not Fixed</strong></td></tr>
<tr><td>EPSS Score</td><td><code>0.059%</code></td></tr>
<tr><td>EPSS Percentile</td><td><code>19th percentile</code></td></tr>
</table>

<details><summary>Description</summary>
<blockquote>

A vulnerability was found in GNU Binutils 2.43. It has been rated as problematic. This issue affects the function xmemdup of the file xmemdup.c of the component ld. The manipulation leads to memory leak. The attack may be initiated remotely. The complexity of an attack is rather high. The exploitation is known to be difficult. The exploit has been disclosed to the public and may be used. It is recommended to apply a patch to fix this issue. The code maintainer explains: "I'm not going to commit some of the leak fixes I've been working on to the 2.44 branch due to concern that would destabilise ld. All of the reported leaks in this bugzilla have been fixed on binutils master."

---
- binutils <unfixed> (unimportant)
https://sourceware.org/bugzilla/show_bug.cgi?id=32576
binutils not covered by security support

</blockquote>
</details>

<a href="https://scout.docker.com/v/CVE-2025-1150?s=debian&n=binutils&ns=debian&t=deb&osn=debian&osv=12&vr=%3E%3D2.40-2"><img alt="low : CVE--2025--1150" src="https://img.shields.io/badge/CVE--2025--1150-lightgrey?label=low%20&labelColor=fce1a9"/></a> 

<table>
<tr><td>Affected range</td><td><code>>=2.40-2</code></td></tr>
<tr><td>Fixed version</td><td><strong>Not Fixed</strong></td></tr>
<tr><td>EPSS Score</td><td><code>0.059%</code></td></tr>
<tr><td>EPSS Percentile</td><td><code>19th percentile</code></td></tr>
</table>

<details><summary>Description</summary>
<blockquote>

A vulnerability was found in GNU Binutils 2.43. It has been declared as problematic. This vulnerability affects the function bfd_malloc of the file libbfd.c of the component ld. The manipulation leads to memory leak. The attack can be initiated remotely. The complexity of an attack is rather high. The exploitation appears to be difficult. The exploit has been disclosed to the public and may be used. It is recommended to apply a patch to fix this issue. The code maintainer explains: "I'm not going to commit some of the leak fixes I've been working on to the 2.44 branch due to concern that would destabilise ld. All of the reported leaks in this bugzilla have been fixed on binutils master."

---
- binutils <unfixed> (unimportant)
https://sourceware.org/bugzilla/show_bug.cgi?id=32576
binutils not covered by security support

</blockquote>
</details>

<a href="https://scout.docker.com/v/CVE-2025-1149?s=debian&n=binutils&ns=debian&t=deb&osn=debian&osv=12&vr=%3E%3D2.40-2"><img alt="low : CVE--2025--1149" src="https://img.shields.io/badge/CVE--2025--1149-lightgrey?label=low%20&labelColor=fce1a9"/></a> 

<table>
<tr><td>Affected range</td><td><code>>=2.40-2</code></td></tr>
<tr><td>Fixed version</td><td><strong>Not Fixed</strong></td></tr>
<tr><td>EPSS Score</td><td><code>0.059%</code></td></tr>
<tr><td>EPSS Percentile</td><td><code>19th percentile</code></td></tr>
</table>

<details><summary>Description</summary>
<blockquote>

A vulnerability was found in GNU Binutils 2.43. It has been classified as problematic. This affects the function xstrdup of the file libiberty/xmalloc.c of the component ld. The manipulation leads to memory leak. It is possible to initiate the attack remotely. The complexity of an attack is rather high. The exploitability is told to be difficult. The exploit has been disclosed to the public and may be used. It is recommended to apply a patch to fix this issue. The code maintainer explains: "I'm not going to commit some of the leak fixes I've been working on to the 2.44 branch due to concern that would destabilise ld. All of the reported leaks in this bugzilla have been fixed on binutils master."

---
- binutils <unfixed> (unimportant)
https://sourceware.org/bugzilla/show_bug.cgi?id=32576
binutils not covered by security support

</blockquote>
</details>

<a href="https://scout.docker.com/v/CVE-2025-1148?s=debian&n=binutils&ns=debian&t=deb&osn=debian&osv=12&vr=%3E%3D2.40-2"><img alt="low : CVE--2025--1148" src="https://img.shields.io/badge/CVE--2025--1148-lightgrey?label=low%20&labelColor=fce1a9"/></a> 

<table>
<tr><td>Affected range</td><td><code>>=2.40-2</code></td></tr>
<tr><td>Fixed version</td><td><strong>Not Fixed</strong></td></tr>
<tr><td>EPSS Score</td><td><code>0.132%</code></td></tr>
<tr><td>EPSS Percentile</td><td><code>34th percentile</code></td></tr>
</table>

<details><summary>Description</summary>
<blockquote>

A vulnerability was found in GNU Binutils 2.43 and classified as problematic. Affected by this issue is the function link_order_scan of the file ld/ldelfgen.c of the component ld. The manipulation leads to memory leak. The attack may be launched remotely. The complexity of an attack is rather high. The exploitation is known to be difficult. The exploit has been disclosed to the public and may be used. It is recommended to apply a patch to fix this issue. The code maintainer explains: "I'm not going to commit some of the leak fixes I've been working on to the 2.44 branch due to concern that would destabilise ld. All of the reported leaks in this bugzilla have been fixed on binutils master."

---
- binutils <unfixed> (unimportant)
https://sourceware.org/bugzilla/show_bug.cgi?id=32576
binutils not covered by security support

</blockquote>
</details>

<a href="https://scout.docker.com/v/CVE-2025-1147?s=debian&n=binutils&ns=debian&t=deb&osn=debian&osv=12&vr=%3E%3D2.40-2"><img alt="low : CVE--2025--1147" src="https://img.shields.io/badge/CVE--2025--1147-lightgrey?label=low%20&labelColor=fce1a9"/></a> 

<table>
<tr><td>Affected range</td><td><code>>=2.40-2</code></td></tr>
<tr><td>Fixed version</td><td><strong>Not Fixed</strong></td></tr>
<tr><td>EPSS Score</td><td><code>0.123%</code></td></tr>
<tr><td>EPSS Percentile</td><td><code>33rd percentile</code></td></tr>
</table>

<details><summary>Description</summary>
<blockquote>

A vulnerability has been found in GNU Binutils 2.43 and classified as problematic. Affected by this vulnerability is the function __sanitizer::internal_strlen of the file binutils/nm.c of the component nm. The manipulation of the argument const leads to buffer overflow. The attack can be launched remotely. The complexity of an attack is rather high. The exploitation appears to be difficult. The exploit has been disclosed to the public and may be used.

---
- binutils <unfixed> (unimportant)
https://sourceware.org/bugzilla/show_bug.cgi?id=32556
binutils not covered by security support

</blockquote>
</details>

<a href="https://scout.docker.com/v/CVE-2025-0840?s=debian&n=binutils&ns=debian&t=deb&osn=debian&osv=12&vr=%3E%3D2.40-2"><img alt="low : CVE--2025--0840" src="https://img.shields.io/badge/CVE--2025--0840-lightgrey?label=low%20&labelColor=fce1a9"/></a> 

<table>
<tr><td>Affected range</td><td><code>>=2.40-2</code></td></tr>
<tr><td>Fixed version</td><td><strong>Not Fixed</strong></td></tr>
<tr><td>EPSS Score</td><td><code>0.093%</code></td></tr>
<tr><td>EPSS Percentile</td><td><code>27th percentile</code></td></tr>
</table>

<details><summary>Description</summary>
<blockquote>

A vulnerability, which was classified as problematic, was found in GNU Binutils up to 2.43. This affects the function disassemble_bytes of the file binutils/objdump.c. The manipulation of the argument buf leads to stack-based buffer overflow. It is possible to initiate the attack remotely. The complexity of an attack is rather high. The exploitability is told to be difficult. The exploit has been disclosed to the public and may be used. Upgrading to version 2.44 is able to address this issue. The identifier of the patch is baac6c221e9d69335bf41366a1c7d87d8ab2f893. It is recommended to upgrade the affected component.

---
- binutils 2.43.90.20250122-1 (unimportant)
https://sourceware.org/bugzilla/show_bug.cgi?id=32560
https://sourceware.org/git/gitweb.cgi?p=binutils-gdb.git;h=baac6c221e9d69335bf41366a1c7d87d8ab2f893
binutils not covered by security support

</blockquote>
</details>

<a href="https://scout.docker.com/v/CVE-2024-57360?s=debian&n=binutils&ns=debian&t=deb&osn=debian&osv=12&vr=%3E%3D2.40-2"><img alt="low : CVE--2024--57360" src="https://img.shields.io/badge/CVE--2024--57360-lightgrey?label=low%20&labelColor=fce1a9"/></a> 

<table>
<tr><td>Affected range</td><td><code>>=2.40-2</code></td></tr>
<tr><td>Fixed version</td><td><strong>Not Fixed</strong></td></tr>
<tr><td>EPSS Score</td><td><code>0.029%</code></td></tr>
<tr><td>EPSS Percentile</td><td><code>7th percentile</code></td></tr>
</table>

<details><summary>Description</summary>
<blockquote>

https://www.gnu.org/software/binutils/ nm >=2.43 is affected by: Incorrect Access Control. The type of exploitation is: local. The component is: `nm --without-symbol-version` function.

---
- binutils 2.43.50.20241221-1 (unimportant)
https://sourceware.org/bugzilla/show_bug.cgi?id=32467
Fixed by: https://sourceware.org/git/gitweb.cgi?p=binutils-gdb.git;h=5f8987d3999edb26e757115fe87be55787d510b9
binutils not covered by security support

</blockquote>
</details>

<a href="https://scout.docker.com/v/CVE-2024-53589?s=debian&n=binutils&ns=debian&t=deb&osn=debian&osv=12&vr=%3E%3D2.40-2"><img alt="low : CVE--2024--53589" src="https://img.shields.io/badge/CVE--2024--53589-lightgrey?label=low%20&labelColor=fce1a9"/></a> 

<table>
<tr><td>Affected range</td><td><code>>=2.40-2</code></td></tr>
<tr><td>Fixed version</td><td><strong>Not Fixed</strong></td></tr>
<tr><td>EPSS Score</td><td><code>0.032%</code></td></tr>
<tr><td>EPSS Percentile</td><td><code>8th percentile</code></td></tr>
</table>

<details><summary>Description</summary>
<blockquote>

GNU objdump 2.43 is vulnerable to Buffer Overflow in the BFD (Binary File Descriptor) library's handling of tekhex format files.

---
- binutils 2.44-1 (unimportant)
https://bushido-sec.com/index.php/2024/12/05/binutils-objdump-tekhex-buffer-overflow/
https://sourceware.org/git/gitweb.cgi?p=binutils-gdb.git;h=e0323071916878e0634a6e24d8250e4faff67e88 (binutils-2_44)
binutils not covered by security support

</blockquote>
</details>

<a href="https://scout.docker.com/v/CVE-2023-1972?s=debian&n=binutils&ns=debian&t=deb&osn=debian&osv=12&vr=%3E%3D2.40-2"><img alt="low : CVE--2023--1972" src="https://img.shields.io/badge/CVE--2023--1972-lightgrey?label=low%20&labelColor=fce1a9"/></a> 

<table>
<tr><td>Affected range</td><td><code>>=2.40-2</code></td></tr>
<tr><td>Fixed version</td><td><strong>Not Fixed</strong></td></tr>
<tr><td>EPSS Score</td><td><code>0.045%</code></td></tr>
<tr><td>EPSS Percentile</td><td><code>14th percentile</code></td></tr>
</table>

<details><summary>Description</summary>
<blockquote>

A potential heap based buffer overflow was found in _bfd_elf_slurp_version_tables() in bfd/elf.c. This may lead to loss of availability.

---
- binutils 2.41-1 (unimportant)
https://sourceware.org/git/?p=binutils-gdb.git;a=blobdiff;f=bfd/elf.c;h=185028cbd97ae0901c4276c8a4787b12bb75875a;hp=027d01437352555bc4ac0717cb0486c751a7775d;hb=c22d38baefc5a7a1e1f5cdc9dbb556b1f0ec5c57;hpb=f2f9bde5cde7ff34ed0a4c4682a211d402aa1086
https://sourceware.org/bugzilla/show_bug.cgi?id=30285
binutils not covered by security support

</blockquote>
</details>

<a href="https://scout.docker.com/v/CVE-2021-32256?s=debian&n=binutils&ns=debian&t=deb&osn=debian&osv=12&vr=%3E%3D2.40-2"><img alt="low : CVE--2021--32256" src="https://img.shields.io/badge/CVE--2021--32256-lightgrey?label=low%20&labelColor=fce1a9"/></a> 

<table>
<tr><td>Affected range</td><td><code>>=2.40-2</code></td></tr>
<tr><td>Fixed version</td><td><strong>Not Fixed</strong></td></tr>
<tr><td>EPSS Score</td><td><code>0.115%</code></td></tr>
<tr><td>EPSS Percentile</td><td><code>31st percentile</code></td></tr>
</table>

<details><summary>Description</summary>
<blockquote>

An issue was discovered in GNU libiberty, as distributed in GNU Binutils 2.36. It is a stack-overflow issue in demangle_type in rust-demangle.c.

---
- binutils <unfixed> (unimportant)
https://bugs.launchpad.net/ubuntu/+source/binutils/+bug/1927070
binutils not covered by security support

</blockquote>
</details>

<a href="https://scout.docker.com/v/CVE-2018-9996?s=debian&n=binutils&ns=debian&t=deb&osn=debian&osv=12&vr=%3E%3D2.40-2"><img alt="low : CVE--2018--9996" src="https://img.shields.io/badge/CVE--2018--9996-lightgrey?label=low%20&labelColor=fce1a9"/></a> 

<table>
<tr><td>Affected range</td><td><code>>=2.40-2</code></td></tr>
<tr><td>Fixed version</td><td><strong>Not Fixed</strong></td></tr>
<tr><td>EPSS Score</td><td><code>0.385%</code></td></tr>
<tr><td>EPSS Percentile</td><td><code>59th percentile</code></td></tr>
</table>

<details><summary>Description</summary>
<blockquote>

An issue was discovered in cplus-dem.c in GNU libiberty, as distributed in GNU Binutils 2.30. Stack Exhaustion occurs in the C++ demangling functions provided by libiberty, and there are recursive stack frames: demangle_template_value_parm, demangle_integral_value, and demangle_expression.

---
- binutils <unfixed> (unimportant)
https://gcc.gnu.org/bugzilla/show_bug.cgi?id=85304
binutils not covered by security support

</blockquote>
</details>

<a href="https://scout.docker.com/v/CVE-2018-20712?s=debian&n=binutils&ns=debian&t=deb&osn=debian&osv=12&vr=%3E%3D2.40-2"><img alt="low : CVE--2018--20712" src="https://img.shields.io/badge/CVE--2018--20712-lightgrey?label=low%20&labelColor=fce1a9"/></a> 

<table>
<tr><td>Affected range</td><td><code>>=2.40-2</code></td></tr>
<tr><td>Fixed version</td><td><strong>Not Fixed</strong></td></tr>
<tr><td>EPSS Score</td><td><code>1.070%</code></td></tr>
<tr><td>EPSS Percentile</td><td><code>77th percentile</code></td></tr>
</table>

<details><summary>Description</summary>
<blockquote>

A heap-based buffer over-read exists in the function d_expression_1 in cp-demangle.c in GNU libiberty, as distributed in GNU Binutils 2.31.1. A crafted input can cause segmentation faults, leading to denial-of-service, as demonstrated by c++filt.

---
- binutils <unfixed> (unimportant)
https://gcc.gnu.org/bugzilla/show_bug.cgi?id=88629
https://sourceware.org/bugzilla/show_bug.cgi?id=24043
binutils not covered by security support

</blockquote>
</details>

<a href="https://scout.docker.com/v/CVE-2018-20673?s=debian&n=binutils&ns=debian&t=deb&osn=debian&osv=12&vr=%3E%3D2.40-2"><img alt="low : CVE--2018--20673" src="https://img.shields.io/badge/CVE--2018--20673-lightgrey?label=low%20&labelColor=fce1a9"/></a> 

<table>
<tr><td>Affected range</td><td><code>>=2.40-2</code></td></tr>
<tr><td>Fixed version</td><td><strong>Not Fixed</strong></td></tr>
<tr><td>EPSS Score</td><td><code>0.100%</code></td></tr>
<tr><td>EPSS Percentile</td><td><code>29th percentile</code></td></tr>
</table>

<details><summary>Description</summary>
<blockquote>

The demangle_template function in cplus-dem.c in GNU libiberty, as distributed in GNU Binutils 2.31.1, contains an integer overflow vulnerability (for "Create an array for saving the template argument values") that can trigger a heap-based buffer overflow, as demonstrated by nm.

---
- binutils <unfixed> (unimportant)
https://sourceware.org/bugzilla/show_bug.cgi?id=24039
binutils not covered by security support

</blockquote>
</details>

<a href="https://scout.docker.com/v/CVE-2017-13716?s=debian&n=binutils&ns=debian&t=deb&osn=debian&osv=12&vr=%3E%3D2.40-2"><img alt="low : CVE--2017--13716" src="https://img.shields.io/badge/CVE--2017--13716-lightgrey?label=low%20&labelColor=fce1a9"/></a> 

<table>
<tr><td>Affected range</td><td><code>>=2.40-2</code></td></tr>
<tr><td>Fixed version</td><td><strong>Not Fixed</strong></td></tr>
<tr><td>EPSS Score</td><td><code>0.255%</code></td></tr>
<tr><td>EPSS Percentile</td><td><code>49th percentile</code></td></tr>
</table>

<details><summary>Description</summary>
<blockquote>

The C++ symbol demangler routine in cplus-dem.c in libiberty, as distributed in GNU Binutils 2.29, allows remote attackers to cause a denial of service (excessive memory allocation and application crash) via a crafted file, as demonstrated by a call from the Binary File Descriptor (BFD) library (aka libbfd).

---
- binutils <unfixed> (unimportant)
https://sourceware.org/bugzilla/show_bug.cgi?id=22009
Underlying bug is though in the C++ demangler part of libiberty, but MITRE
has assigned it specifically to the issue as raised within binutils.
binutils not covered by security support

</blockquote>
</details>
</details></td></tr>

<tr><td valign="top">
<details><summary><img alt="critical: 0" src="https://img.shields.io/badge/C-0-lightgrey"/> <img alt="high: 0" src="https://img.shields.io/badge/H-0-lightgrey"/> <img alt="medium: 0" src="https://img.shields.io/badge/M-0-lightgrey"/> <img alt="low: 7" src="https://img.shields.io/badge/L-7-fce1a9"/> <!-- unspecified: 0 --><strong>glibc</strong> <code>2.36-9+deb12u10</code> (deb)</summary>

<small><code>pkg:deb/debian/glibc@2.36-9%2Bdeb12u10?os_distro=bookworm&os_name=debian&os_version=12</code></small><br/>

```dockerfile
# apache/Dockerfile (0:0)

```

<br/>

<a href="https://scout.docker.com/v/CVE-2019-9192?s=debian&n=glibc&ns=debian&t=deb&osn=debian&osv=12&vr=%3E%3D2.36-9%2Bdeb12u10"><img alt="low : CVE--2019--9192" src="https://img.shields.io/badge/CVE--2019--9192-lightgrey?label=low%20&labelColor=fce1a9"/></a> 

<table>
<tr><td>Affected range</td><td><code>>=2.36-9+deb12u10</code></td></tr>
<tr><td>Fixed version</td><td><strong>Not Fixed</strong></td></tr>
<tr><td>EPSS Score</td><td><code>0.164%</code></td></tr>
<tr><td>EPSS Percentile</td><td><code>38th percentile</code></td></tr>
</table>

<details><summary>Description</summary>
<blockquote>

In the GNU C Library (aka glibc or libc6) through 2.29, check_dst_limits_calc_pos_1 in posix/regexec.c has Uncontrolled Recursion, as demonstrated by '(|)(\\1\\1)*' in grep, a different issue than CVE-2018-20796. NOTE: the software maintainer disputes that this is a vulnerability because the behavior occurs only with a crafted pattern

---
- glibc <unfixed> (unimportant)
- eglibc <removed> (unimportant)
https://sourceware.org/bugzilla/show_bug.cgi?id=24269

</blockquote>
</details>

<a href="https://scout.docker.com/v/CVE-2019-1010025?s=debian&n=glibc&ns=debian&t=deb&osn=debian&osv=12&vr=%3E%3D2.36-9%2Bdeb12u10"><img alt="low : CVE--2019--1010025" src="https://img.shields.io/badge/CVE--2019--1010025-lightgrey?label=low%20&labelColor=fce1a9"/></a> 

<table>
<tr><td>Affected range</td><td><code>>=2.36-9+deb12u10</code></td></tr>
<tr><td>Fixed version</td><td><strong>Not Fixed</strong></td></tr>
<tr><td>EPSS Score</td><td><code>0.235%</code></td></tr>
<tr><td>EPSS Percentile</td><td><code>47th percentile</code></td></tr>
</table>

<details><summary>Description</summary>
<blockquote>

GNU Libc current is affected by: Mitigation bypass. The impact is: Attacker may guess the heap addresses of pthread_created thread. The component is: glibc. NOTE: the vendor's position is "ASLR bypass itself is not a vulnerability.

---
- glibc <unfixed> (unimportant)
Not treated as a security issue by upstream
https://sourceware.org/bugzilla/show_bug.cgi?id=22853

</blockquote>
</details>

<a href="https://scout.docker.com/v/CVE-2019-1010024?s=debian&n=glibc&ns=debian&t=deb&osn=debian&osv=12&vr=%3E%3D2.36-9%2Bdeb12u10"><img alt="low : CVE--2019--1010024" src="https://img.shields.io/badge/CVE--2019--1010024-lightgrey?label=low%20&labelColor=fce1a9"/></a> 

<table>
<tr><td>Affected range</td><td><code>>=2.36-9+deb12u10</code></td></tr>
<tr><td>Fixed version</td><td><strong>Not Fixed</strong></td></tr>
<tr><td>EPSS Score</td><td><code>0.375%</code></td></tr>
<tr><td>EPSS Percentile</td><td><code>58th percentile</code></td></tr>
</table>

<details><summary>Description</summary>
<blockquote>

GNU Libc current is affected by: Mitigation bypass. The impact is: Attacker may bypass ASLR using cache of thread stack and heap. The component is: glibc. NOTE: Upstream comments indicate "this is being treated as a non-security bug and no real threat.

---
- glibc <unfixed> (unimportant)
Not treated as a security issue by upstream
https://sourceware.org/bugzilla/show_bug.cgi?id=22852

</blockquote>
</details>

<a href="https://scout.docker.com/v/CVE-2019-1010023?s=debian&n=glibc&ns=debian&t=deb&osn=debian&osv=12&vr=%3E%3D2.36-9%2Bdeb12u10"><img alt="low : CVE--2019--1010023" src="https://img.shields.io/badge/CVE--2019--1010023-lightgrey?label=low%20&labelColor=fce1a9"/></a> 

<table>
<tr><td>Affected range</td><td><code>>=2.36-9+deb12u10</code></td></tr>
<tr><td>Fixed version</td><td><strong>Not Fixed</strong></td></tr>
<tr><td>EPSS Score</td><td><code>0.393%</code></td></tr>
<tr><td>EPSS Percentile</td><td><code>59th percentile</code></td></tr>
</table>

<details><summary>Description</summary>
<blockquote>

GNU Libc current is affected by: Re-mapping current loaded library with malicious ELF file. The impact is: In worst case attacker may evaluate privileges. The component is: libld. The attack vector is: Attacker sends 2 ELF files to victim and asks to run ldd on it. ldd execute code. NOTE: Upstream comments indicate "this is being treated as a non-security bug and no real threat.

---
- glibc <unfixed> (unimportant)
Not treated as a security issue by upstream
https://sourceware.org/bugzilla/show_bug.cgi?id=22851

</blockquote>
</details>

<a href="https://scout.docker.com/v/CVE-2019-1010022?s=debian&n=glibc&ns=debian&t=deb&osn=debian&osv=12&vr=%3E%3D2.36-9%2Bdeb12u10"><img alt="low : CVE--2019--1010022" src="https://img.shields.io/badge/CVE--2019--1010022-lightgrey?label=low%20&labelColor=fce1a9"/></a> 

<table>
<tr><td>Affected range</td><td><code>>=2.36-9+deb12u10</code></td></tr>
<tr><td>Fixed version</td><td><strong>Not Fixed</strong></td></tr>
<tr><td>EPSS Score</td><td><code>0.226%</code></td></tr>
<tr><td>EPSS Percentile</td><td><code>46th percentile</code></td></tr>
</table>

<details><summary>Description</summary>
<blockquote>

GNU Libc current is affected by: Mitigation bypass. The impact is: Attacker may bypass stack guard protection. The component is: nptl. The attack vector is: Exploit stack buffer overflow vulnerability and use this bypass vulnerability to bypass stack guard. NOTE: Upstream comments indicate "this is being treated as a non-security bug and no real threat.

---
- glibc <unfixed> (unimportant)
Not treated as a security issue by upstream
https://sourceware.org/bugzilla/show_bug.cgi?id=22850

</blockquote>
</details>

<a href="https://scout.docker.com/v/CVE-2018-20796?s=debian&n=glibc&ns=debian&t=deb&osn=debian&osv=12&vr=%3E%3D2.36-9%2Bdeb12u10"><img alt="low : CVE--2018--20796" src="https://img.shields.io/badge/CVE--2018--20796-lightgrey?label=low%20&labelColor=fce1a9"/></a> 

<table>
<tr><td>Affected range</td><td><code>>=2.36-9+deb12u10</code></td></tr>
<tr><td>Fixed version</td><td><strong>Not Fixed</strong></td></tr>
<tr><td>EPSS Score</td><td><code>1.996%</code></td></tr>
<tr><td>EPSS Percentile</td><td><code>83rd percentile</code></td></tr>
</table>

<details><summary>Description</summary>
<blockquote>

In the GNU C Library (aka glibc or libc6) through 2.29, check_dst_limits_calc_pos_1 in posix/regexec.c has Uncontrolled Recursion, as demonstrated by '(\227|)(\\1\\1|t1|\\\2537)+' in grep.

---
- glibc <unfixed> (unimportant)
- eglibc <removed> (unimportant)
https://debbugs.gnu.org/cgi/bugreport.cgi?bug=34141
https://lists.gnu.org/archive/html/bug-gnulib/2019-01/msg00108.html
No treated as vulnerability: https://sourceware.org/glibc/wiki/Security%20Exceptions

</blockquote>
</details>

<a href="https://scout.docker.com/v/CVE-2010-4756?s=debian&n=glibc&ns=debian&t=deb&osn=debian&osv=12&vr=%3E%3D2.36-9%2Bdeb12u10"><img alt="low : CVE--2010--4756" src="https://img.shields.io/badge/CVE--2010--4756-lightgrey?label=low%20&labelColor=fce1a9"/></a> 

<table>
<tr><td>Affected range</td><td><code>>=2.36-9+deb12u10</code></td></tr>
<tr><td>Fixed version</td><td><strong>Not Fixed</strong></td></tr>
<tr><td>EPSS Score</td><td><code>0.373%</code></td></tr>
<tr><td>EPSS Percentile</td><td><code>58th percentile</code></td></tr>
</table>

<details><summary>Description</summary>
<blockquote>

The glob implementation in the GNU C Library (aka glibc or libc6) allows remote authenticated users to cause a denial of service (CPU and memory consumption) via crafted glob expressions that do not match any pathnames, as demonstrated by glob expressions in STAT commands to an FTP daemon, a different vulnerability than CVE-2010-2632.

---
- glibc <removed> (unimportant)
- eglibc <unfixed> (unimportant)
That's standard POSIX behaviour implemented by (e)glibc. Applications using
glob need to impose limits for themselves

</blockquote>
</details>
</details></td></tr>

<tr><td valign="top">
<details><summary><img alt="critical: 0" src="https://img.shields.io/badge/C-0-lightgrey"/> <img alt="high: 0" src="https://img.shields.io/badge/H-0-lightgrey"/> <img alt="medium: 0" src="https://img.shields.io/badge/M-0-lightgrey"/> <img alt="low: 4" src="https://img.shields.io/badge/L-4-fce1a9"/> <!-- unspecified: 0 --><strong>patch</strong> <code>2.7.6-7</code> (deb)</summary>

<small><code>pkg:deb/debian/patch@2.7.6-7?os_distro=bookworm&os_name=debian&os_version=12</code></small><br/>

```dockerfile
# apache/Dockerfile (0:0)

```

<br/>

<a href="https://scout.docker.com/v/CVE-2021-45261?s=debian&n=patch&ns=debian&t=deb&osn=debian&osv=12&vr=%3E%3D2.7.6-7"><img alt="low : CVE--2021--45261" src="https://img.shields.io/badge/CVE--2021--45261-lightgrey?label=low%20&labelColor=fce1a9"/></a> 

<table>
<tr><td>Affected range</td><td><code>>=2.7.6-7</code></td></tr>
<tr><td>Fixed version</td><td><strong>Not Fixed</strong></td></tr>
<tr><td>EPSS Score</td><td><code>0.087%</code></td></tr>
<tr><td>EPSS Percentile</td><td><code>26th percentile</code></td></tr>
</table>

<details><summary>Description</summary>
<blockquote>

An Invalid Pointer vulnerability exists in GNU patch 2.7 via the another_hunk function, which causes a Denial of Service.

---
- patch <unfixed> (unimportant)
https://savannah.gnu.org/bugs/?61685
Negligible security impact

</blockquote>
</details>

<a href="https://scout.docker.com/v/CVE-2018-6952?s=debian&n=patch&ns=debian&t=deb&osn=debian&osv=12&vr=%3E%3D2.7.6-7"><img alt="low : CVE--2018--6952" src="https://img.shields.io/badge/CVE--2018--6952-lightgrey?label=low%20&labelColor=fce1a9"/></a> 

<table>
<tr><td>Affected range</td><td><code>>=2.7.6-7</code></td></tr>
<tr><td>Fixed version</td><td><strong>Not Fixed</strong></td></tr>
<tr><td>EPSS Score</td><td><code>11.377%</code></td></tr>
<tr><td>EPSS Percentile</td><td><code>93rd percentile</code></td></tr>
</table>

<details><summary>Description</summary>
<blockquote>

A double free exists in the another_hunk function in pch.c in GNU patch through 2.7.6.

---
- patch <unfixed> (unimportant)
https://savannah.gnu.org/bugs/index.php?53133
https://git.savannah.gnu.org/cgit/patch.git/commit/?id=9c986353e420ead6e706262bf204d6e03322c300
When fixing this issue make sure to not apply only the incomplete fix,
and opening CVE-2019-20633, cf. https://savannah.gnu.org/bugs/index.php?56683
Crash in CLI tool, no security impact

</blockquote>
</details>

<a href="https://scout.docker.com/v/CVE-2018-6951?s=debian&n=patch&ns=debian&t=deb&osn=debian&osv=12&vr=%3E%3D2.7.6-7"><img alt="low : CVE--2018--6951" src="https://img.shields.io/badge/CVE--2018--6951-lightgrey?label=low%20&labelColor=fce1a9"/></a> 

<table>
<tr><td>Affected range</td><td><code>>=2.7.6-7</code></td></tr>
<tr><td>Fixed version</td><td><strong>Not Fixed</strong></td></tr>
<tr><td>EPSS Score</td><td><code>23.094%</code></td></tr>
<tr><td>EPSS Percentile</td><td><code>96th percentile</code></td></tr>
</table>

<details><summary>Description</summary>
<blockquote>

An issue was discovered in GNU patch through 2.7.6. There is a segmentation fault, associated with a NULL pointer dereference, leading to a denial of service in the intuit_diff_type function in pch.c, aka a "mangled rename" issue.

---
- patch <unfixed> (unimportant)
https://git.savannah.gnu.org/cgit/patch.git/commit/?id=f290f48a621867084884bfff87f8093c15195e6a
https://savannah.gnu.org/bugs/index.php?53132
Crash in CLI tool, no security impact

</blockquote>
</details>

<a href="https://scout.docker.com/v/CVE-2010-4651?s=debian&n=patch&ns=debian&t=deb&osn=debian&osv=12&vr=%3E%3D2.7.6-7"><img alt="low : CVE--2010--4651" src="https://img.shields.io/badge/CVE--2010--4651-lightgrey?label=low%20&labelColor=fce1a9"/></a> 

<table>
<tr><td>Affected range</td><td><code>>=2.7.6-7</code></td></tr>
<tr><td>Fixed version</td><td><strong>Not Fixed</strong></td></tr>
<tr><td>EPSS Score</td><td><code>0.912%</code></td></tr>
<tr><td>EPSS Percentile</td><td><code>75th percentile</code></td></tr>
</table>

<details><summary>Description</summary>
<blockquote>

Directory traversal vulnerability in util.c in GNU patch 2.6.1 and earlier allows user-assisted remote attackers to create or overwrite arbitrary files via a filename that is specified with a .. (dot dot) or full pathname, a related issue to CVE-2010-1679.

---
- patch <unfixed> (unimportant)
Applying a patch blindly opens more severe security issues than only directory traversal...
openwall ships a fix
See https://bugzilla.redhat.com/show_bug.cgi?id=667529 for details

</blockquote>
</details>
</details></td></tr>

<tr><td valign="top">
<details><summary><img alt="critical: 0" src="https://img.shields.io/badge/C-0-lightgrey"/> <img alt="high: 0" src="https://img.shields.io/badge/H-0-lightgrey"/> <img alt="medium: 0" src="https://img.shields.io/badge/M-0-lightgrey"/> <img alt="low: 4" src="https://img.shields.io/badge/L-4-fce1a9"/> <!-- unspecified: 0 --><strong>systemd</strong> <code>252.36-1~deb12u1</code> (deb)</summary>

<small><code>pkg:deb/debian/systemd@252.36-1~deb12u1?os_distro=bookworm&os_name=debian&os_version=12</code></small><br/>

```dockerfile
# apache/Dockerfile (0:0)

```

<br/>

<a href="https://scout.docker.com/v/CVE-2023-31439?s=debian&n=systemd&ns=debian&t=deb&osn=debian&osv=12&vr=%3E%3D252.36-1%7Edeb12u1"><img alt="low : CVE--2023--31439" src="https://img.shields.io/badge/CVE--2023--31439-lightgrey?label=low%20&labelColor=fce1a9"/></a> 

<table>
<tr><td>Affected range</td><td><code>>=252.36-1~deb12u1</code></td></tr>
<tr><td>Fixed version</td><td><strong>Not Fixed</strong></td></tr>
<tr><td>EPSS Score</td><td><code>0.094%</code></td></tr>
<tr><td>EPSS Percentile</td><td><code>28th percentile</code></td></tr>
</table>

<details><summary>Description</summary>
<blockquote>

An issue was discovered in systemd 253. An attacker can modify the contents of past events in a sealed log file and then adjust the file such that checking the integrity shows no error, despite modifications. NOTE: the vendor reportedly sent "a reply denying that any of the finding was a security vulnerability."

---
- systemd <unfixed> (unimportant)
Disputed by upstream
https://github.com/kastel-security/Journald/blob/main/journald-publication.pdf

</blockquote>
</details>

<a href="https://scout.docker.com/v/CVE-2023-31438?s=debian&n=systemd&ns=debian&t=deb&osn=debian&osv=12&vr=%3E%3D252.36-1%7Edeb12u1"><img alt="low : CVE--2023--31438" src="https://img.shields.io/badge/CVE--2023--31438-lightgrey?label=low%20&labelColor=fce1a9"/></a> 

<table>
<tr><td>Affected range</td><td><code>>=252.36-1~deb12u1</code></td></tr>
<tr><td>Fixed version</td><td><strong>Not Fixed</strong></td></tr>
<tr><td>EPSS Score</td><td><code>0.100%</code></td></tr>
<tr><td>EPSS Percentile</td><td><code>29th percentile</code></td></tr>
</table>

<details><summary>Description</summary>
<blockquote>

An issue was discovered in systemd 253. An attacker can truncate a sealed log file and then resume log sealing such that checking the integrity shows no error, despite modifications. NOTE: the vendor reportedly sent "a reply denying that any of the finding was a security vulnerability."

---
- systemd <unfixed> (unimportant)
Disputed by upstream
https://github.com/kastel-security/Journald/blob/main/journald-publication.pdf

</blockquote>
</details>

<a href="https://scout.docker.com/v/CVE-2023-31437?s=debian&n=systemd&ns=debian&t=deb&osn=debian&osv=12&vr=%3E%3D252.36-1%7Edeb12u1"><img alt="low : CVE--2023--31437" src="https://img.shields.io/badge/CVE--2023--31437-lightgrey?label=low%20&labelColor=fce1a9"/></a> 

<table>
<tr><td>Affected range</td><td><code>>=252.36-1~deb12u1</code></td></tr>
<tr><td>Fixed version</td><td><strong>Not Fixed</strong></td></tr>
<tr><td>EPSS Score</td><td><code>0.128%</code></td></tr>
<tr><td>EPSS Percentile</td><td><code>34th percentile</code></td></tr>
</table>

<details><summary>Description</summary>
<blockquote>

An issue was discovered in systemd 253. An attacker can modify a sealed log file such that, in some views, not all existing and sealed log messages are displayed. NOTE: the vendor reportedly sent "a reply denying that any of the finding was a security vulnerability."

---
- systemd <unfixed> (unimportant)
Disputed by upstream
https://github.com/kastel-security/Journald/blob/main/journald-publication.pdf

</blockquote>
</details>

<a href="https://scout.docker.com/v/CVE-2013-4392?s=debian&n=systemd&ns=debian&t=deb&osn=debian&osv=12&vr=%3E%3D252.36-1%7Edeb12u1"><img alt="low : CVE--2013--4392" src="https://img.shields.io/badge/CVE--2013--4392-lightgrey?label=low%20&labelColor=fce1a9"/></a> 

<table>
<tr><td>Affected range</td><td><code>>=252.36-1~deb12u1</code></td></tr>
<tr><td>Fixed version</td><td><strong>Not Fixed</strong></td></tr>
<tr><td>EPSS Score</td><td><code>0.139%</code></td></tr>
<tr><td>EPSS Percentile</td><td><code>35th percentile</code></td></tr>
</table>

<details><summary>Description</summary>
<blockquote>

systemd, when updating file permissions, allows local users to change the permissions and SELinux security contexts for arbitrary files via a symlink attack on unspecified files.

---
- systemd <unfixed> (unimportant; bug https://bugs.debian.org/cgi-bin/bugreport.cgi?bug=725357)
[wheezy] - systemd <not-affected> (/etc/tmpfiles.d not supported in Wheezy)
https://bugzilla.redhat.com/show_bug.cgi?id=859060
only relevant to systems running systemd along with selinux

</blockquote>
</details>
</details></td></tr>

<tr><td valign="top">
<details><summary><img alt="critical: 0" src="https://img.shields.io/badge/C-0-lightgrey"/> <img alt="high: 0" src="https://img.shields.io/badge/H-0-lightgrey"/> <img alt="medium: 0" src="https://img.shields.io/badge/M-0-lightgrey"/> <img alt="low: 4" src="https://img.shields.io/badge/L-4-fce1a9"/> <!-- unspecified: 0 --><strong>openldap</strong> <code>2.5.13+dfsg-5</code> (deb)</summary>

<small><code>pkg:deb/debian/openldap@2.5.13%2Bdfsg-5?os_distro=bookworm&os_name=debian&os_version=12</code></small><br/>

```dockerfile
# apache/Dockerfile (0:0)

```

<br/>

<a href="https://scout.docker.com/v/CVE-2020-15719?s=debian&n=openldap&ns=debian&t=deb&osn=debian&osv=12&vr=%3E%3D2.5.13%2Bdfsg-5"><img alt="low : CVE--2020--15719" src="https://img.shields.io/badge/CVE--2020--15719-lightgrey?label=low%20&labelColor=fce1a9"/></a> 

<table>
<tr><td>Affected range</td><td><code>>=2.5.13+dfsg-5</code></td></tr>
<tr><td>Fixed version</td><td><strong>Not Fixed</strong></td></tr>
<tr><td>EPSS Score</td><td><code>0.371%</code></td></tr>
<tr><td>EPSS Percentile</td><td><code>58th percentile</code></td></tr>
</table>

<details><summary>Description</summary>
<blockquote>

libldap in certain third-party OpenLDAP packages has a certificate-validation flaw when the third-party package is asserting RFC6125 support. It considers CN even when there is a non-matching subjectAltName (SAN). This is fixed in, for example, openldap-2.4.46-10.el8 in Red Hat Enterprise Linux.

---
- openldap <unfixed> (unimportant; bug https://bugs.debian.org/cgi-bin/bugreport.cgi?bug=965184)
https://bugs.openldap.org/show_bug.cgi?id=9266
https://bugzilla.redhat.com/show_bug.cgi?id=1740070
RedHat/CentOS applied patch: https://git.centos.org/rpms/openldap/raw/67459960064be9d226d57c5f82aaba0929876813/f/SOURCES/openldap-tlso-dont-check-cn-when-bad-san.patch
OpenLDAP upstream did dispute the issue as beeing valid, as the current libldap
behaviour does conform with RFC4513. RFC6125 does not superseed the rules for
verifying service identity provided in specifications for existing application
protocols published prior to RFC6125, like RFC4513 for LDAP.

</blockquote>
</details>

<a href="https://scout.docker.com/v/CVE-2017-17740?s=debian&n=openldap&ns=debian&t=deb&osn=debian&osv=12&vr=%3E%3D2.5.13%2Bdfsg-5"><img alt="low : CVE--2017--17740" src="https://img.shields.io/badge/CVE--2017--17740-lightgrey?label=low%20&labelColor=fce1a9"/></a> 

<table>
<tr><td>Affected range</td><td><code>>=2.5.13+dfsg-5</code></td></tr>
<tr><td>Fixed version</td><td><strong>Not Fixed</strong></td></tr>
<tr><td>EPSS Score</td><td><code>2.071%</code></td></tr>
<tr><td>EPSS Percentile</td><td><code>83rd percentile</code></td></tr>
</table>

<details><summary>Description</summary>
<blockquote>

contrib/slapd-modules/nops/nops.c in OpenLDAP through 2.4.45, when both the nops module and the memberof overlay are enabled, attempts to free a buffer that was allocated on the stack, which allows remote attackers to cause a denial of service (slapd crash) via a member MODDN operation.

---
- openldap <unfixed> (unimportant)
http://www.openldap.org/its/index.cgi/Incoming?id=8759
nops slapd-module not built

</blockquote>
</details>

<a href="https://scout.docker.com/v/CVE-2017-14159?s=debian&n=openldap&ns=debian&t=deb&osn=debian&osv=12&vr=%3E%3D2.5.13%2Bdfsg-5"><img alt="low : CVE--2017--14159" src="https://img.shields.io/badge/CVE--2017--14159-lightgrey?label=low%20&labelColor=fce1a9"/></a> 

<table>
<tr><td>Affected range</td><td><code>>=2.5.13+dfsg-5</code></td></tr>
<tr><td>Fixed version</td><td><strong>Not Fixed</strong></td></tr>
<tr><td>EPSS Score</td><td><code>0.111%</code></td></tr>
<tr><td>EPSS Percentile</td><td><code>31st percentile</code></td></tr>
</table>

<details><summary>Description</summary>
<blockquote>

slapd in OpenLDAP 2.4.45 and earlier creates a PID file after dropping privileges to a non-root account, which might allow local users to kill arbitrary processes by leveraging access to this non-root account for PID file modification before a root script executes a "kill `cat /pathname`" command, as demonstrated by openldap-initscript.

---
- openldap <unfixed> (unimportant)
http://www.openldap.org/its/index.cgi?findid=8703
Negligible security impact, but filed #877512

</blockquote>
</details>

<a href="https://scout.docker.com/v/CVE-2015-3276?s=debian&n=openldap&ns=debian&t=deb&osn=debian&osv=12&vr=%3E%3D2.5.13%2Bdfsg-5"><img alt="low : CVE--2015--3276" src="https://img.shields.io/badge/CVE--2015--3276-lightgrey?label=low%20&labelColor=fce1a9"/></a> 

<table>
<tr><td>Affected range</td><td><code>>=2.5.13+dfsg-5</code></td></tr>
<tr><td>Fixed version</td><td><strong>Not Fixed</strong></td></tr>
<tr><td>EPSS Score</td><td><code>2.147%</code></td></tr>
<tr><td>EPSS Percentile</td><td><code>83rd percentile</code></td></tr>
</table>

<details><summary>Description</summary>
<blockquote>

The nss_parse_ciphers function in libraries/libldap/tls_m.c in OpenLDAP does not properly parse OpenSSL-style multi-keyword mode cipher strings, which might cause a weaker than intended cipher to be used and allow remote attackers to have unspecified impact via unknown vectors.

---
- openldap <unfixed> (unimportant)
Debian builds with GNUTLS, not NSS

</blockquote>
</details>
</details></td></tr>

<tr><td valign="top">
<details><summary><img alt="critical: 0" src="https://img.shields.io/badge/C-0-lightgrey"/> <img alt="high: 0" src="https://img.shields.io/badge/H-0-lightgrey"/> <img alt="medium: 0" src="https://img.shields.io/badge/M-0-lightgrey"/> <img alt="low: 3" src="https://img.shields.io/badge/L-3-fce1a9"/> <!-- unspecified: 0 --><strong>krb5</strong> <code>1.20.1-2+deb12u3</code> (deb)</summary>

<small><code>pkg:deb/debian/krb5@1.20.1-2%2Bdeb12u3?os_distro=bookworm&os_name=debian&os_version=12</code></small><br/>

```dockerfile
# apache/Dockerfile (0:0)

```

<br/>

<a href="https://scout.docker.com/v/CVE-2024-26461?s=debian&n=krb5&ns=debian&t=deb&osn=debian&osv=12&vr=%3E%3D1.20.1-2%2Bdeb12u3"><img alt="low : CVE--2024--26461" src="https://img.shields.io/badge/CVE--2024--26461-lightgrey?label=low%20&labelColor=fce1a9"/></a> 

<table>
<tr><td>Affected range</td><td><code>>=1.20.1-2+deb12u3</code></td></tr>
<tr><td>Fixed version</td><td><strong>Not Fixed</strong></td></tr>
<tr><td>EPSS Score</td><td><code>0.084%</code></td></tr>
<tr><td>EPSS Percentile</td><td><code>26th percentile</code></td></tr>
</table>

<details><summary>Description</summary>
<blockquote>

Kerberos 5 (aka krb5) 1.21.2 contains a memory leak vulnerability in /krb5/src/lib/gssapi/krb5/k5sealv3.c.

---
- krb5 <unfixed> (bug https://bugs.debian.org/cgi-bin/bugreport.cgi?bug=1098754; unimportant)
https://github.com/LuMingYinDetect/krb5_defects/blob/main/krb5_detect_2.md
Fixed by: https://github.com/krb5/krb5/commit/c5f9c816107f70139de11b38aa02db2f1774ee0d
Codepath cannot be triggered via API calls, negligible security impact
https://mailman.mit.edu/pipermail/kerberos/2024-March/023095.html

</blockquote>
</details>

<a href="https://scout.docker.com/v/CVE-2024-26458?s=debian&n=krb5&ns=debian&t=deb&osn=debian&osv=12&vr=%3E%3D1.20.1-2%2Bdeb12u3"><img alt="low : CVE--2024--26458" src="https://img.shields.io/badge/CVE--2024--26458-lightgrey?label=low%20&labelColor=fce1a9"/></a> 

<table>
<tr><td>Affected range</td><td><code>>=1.20.1-2+deb12u3</code></td></tr>
<tr><td>Fixed version</td><td><strong>Not Fixed</strong></td></tr>
<tr><td>EPSS Score</td><td><code>0.084%</code></td></tr>
<tr><td>EPSS Percentile</td><td><code>26th percentile</code></td></tr>
</table>

<details><summary>Description</summary>
<blockquote>

Kerberos 5 (aka krb5) 1.21.2 contains a memory leak in /krb5/src/lib/rpc/pmap_rmt.c.

---
- krb5 <unfixed> (bug https://bugs.debian.org/cgi-bin/bugreport.cgi?bug=1098754; unimportant)
https://github.com/LuMingYinDetect/krb5_defects/blob/main/krb5_detect_1.md
Fixed by: https://github.com/krb5/krb5/commit/c5f9c816107f70139de11b38aa02db2f1774ee0d
Unused codepath, negligible security impact
https://mailman.mit.edu/pipermail/kerberos/2024-March/023095.html

</blockquote>
</details>

<a href="https://scout.docker.com/v/CVE-2018-5709?s=debian&n=krb5&ns=debian&t=deb&osn=debian&osv=12&vr=%3E%3D1.20.1-2%2Bdeb12u3"><img alt="low : CVE--2018--5709" src="https://img.shields.io/badge/CVE--2018--5709-lightgrey?label=low%20&labelColor=fce1a9"/></a> 

<table>
<tr><td>Affected range</td><td><code>>=1.20.1-2+deb12u3</code></td></tr>
<tr><td>Fixed version</td><td><strong>Not Fixed</strong></td></tr>
<tr><td>EPSS Score</td><td><code>0.463%</code></td></tr>
<tr><td>EPSS Percentile</td><td><code>63rd percentile</code></td></tr>
</table>

<details><summary>Description</summary>
<blockquote>

An issue was discovered in MIT Kerberos 5 (aka krb5) through 1.16. There is a variable "dbentry->n_key_data" in kadmin/dbutil/dump.c that can store 16-bit data but unknowingly the developer has assigned a "u4" variable to it, which is for 32-bit data. An attacker can use this vulnerability to affect other artifacts of the database as we know that a Kerberos database dump file contains trusted data.

---
- krb5 <unfixed> (unimportant; bug https://bugs.debian.org/cgi-bin/bugreport.cgi?bug=889684)
https://github.com/poojamnit/Kerberos-V5-1.16-Vulnerabilities/tree/master/Integer%20Overflow
non-issue, codepath is only run on trusted input, potential integer
overflow is non-issue

</blockquote>
</details>
</details></td></tr>

<tr><td valign="top">
<details><summary><img alt="critical: 0" src="https://img.shields.io/badge/C-0-lightgrey"/> <img alt="high: 0" src="https://img.shields.io/badge/H-0-lightgrey"/> <img alt="medium: 0" src="https://img.shields.io/badge/M-0-lightgrey"/> <img alt="low: 2" src="https://img.shields.io/badge/L-2-fce1a9"/> <!-- unspecified: 0 --><strong>m4</strong> <code>1.4.19-3</code> (deb)</summary>

<small><code>pkg:deb/debian/m4@1.4.19-3?os_distro=bookworm&os_name=debian&os_version=12</code></small><br/>

```dockerfile
# apache/Dockerfile (0:0)

```

<br/>

<a href="https://scout.docker.com/v/CVE-2008-1688?s=debian&n=m4&ns=debian&t=deb&osn=debian&osv=12&vr=%3E%3D1.4.19-3"><img alt="low : CVE--2008--1688" src="https://img.shields.io/badge/CVE--2008--1688-lightgrey?label=low%20&labelColor=fce1a9"/></a> 

<table>
<tr><td>Affected range</td><td><code>>=1.4.19-3</code></td></tr>
<tr><td>Fixed version</td><td><strong>Not Fixed</strong></td></tr>
<tr><td>EPSS Score</td><td><code>2.196%</code></td></tr>
<tr><td>EPSS Percentile</td><td><code>84th percentile</code></td></tr>
</table>

<details><summary>Description</summary>
<blockquote>

Unspecified vulnerability in GNU m4 before 1.4.11 might allow context-dependent attackers to execute arbitrary code, related to improper handling of filenames specified with the -F option.  NOTE: it is not clear when this issue crosses privilege boundaries.

---
- m4 <unfixed> (unimportant)
The file name is passed through a cmdline argument and m4 doesn't run with
elevated privileges.

</blockquote>
</details>

<a href="https://scout.docker.com/v/CVE-2008-1687?s=debian&n=m4&ns=debian&t=deb&osn=debian&osv=12&vr=%3E%3D1.4.19-3"><img alt="low : CVE--2008--1687" src="https://img.shields.io/badge/CVE--2008--1687-lightgrey?label=low%20&labelColor=fce1a9"/></a> 

<table>
<tr><td>Affected range</td><td><code>>=1.4.19-3</code></td></tr>
<tr><td>Fixed version</td><td><strong>Not Fixed</strong></td></tr>
<tr><td>EPSS Score</td><td><code>2.727%</code></td></tr>
<tr><td>EPSS Percentile</td><td><code>85th percentile</code></td></tr>
</table>

<details><summary>Description</summary>
<blockquote>

The (1) maketemp and (2) mkstemp builtin functions in GNU m4 before 1.4.11 do not quote their output when a file is created, which might allow context-dependent attackers to trigger a macro expansion, leading to unspecified use of an incorrect filename.

---
- m4 <unfixed> (unimportant)
This is more a generic bug and not a security issue: the random output would
need to match the name of an existing macro

</blockquote>
</details>
</details></td></tr>

<tr><td valign="top">
<details><summary><img alt="critical: 0" src="https://img.shields.io/badge/C-0-lightgrey"/> <img alt="high: 0" src="https://img.shields.io/badge/H-0-lightgrey"/> <img alt="medium: 0" src="https://img.shields.io/badge/M-0-lightgrey"/> <img alt="low: 2" src="https://img.shields.io/badge/L-2-fce1a9"/> <!-- unspecified: 0 --><strong>expat</strong> <code>2.5.0-1+deb12u1</code> (deb)</summary>

<small><code>pkg:deb/debian/expat@2.5.0-1%2Bdeb12u1?os_distro=bookworm&os_name=debian&os_version=12</code></small><br/>

```dockerfile
# apache/Dockerfile (0:0)

```

<br/>

<a href="https://scout.docker.com/v/CVE-2024-28757?s=debian&n=expat&ns=debian&t=deb&osn=debian&osv=12&vr=%3E%3D2.5.0-1%2Bdeb12u1"><img alt="low : CVE--2024--28757" src="https://img.shields.io/badge/CVE--2024--28757-lightgrey?label=low%20&labelColor=fce1a9"/></a> 

<table>
<tr><td>Affected range</td><td><code>>=2.5.0-1+deb12u1</code></td></tr>
<tr><td>Fixed version</td><td><strong>Not Fixed</strong></td></tr>
<tr><td>EPSS Score</td><td><code>0.474%</code></td></tr>
<tr><td>EPSS Percentile</td><td><code>64th percentile</code></td></tr>
</table>

<details><summary>Description</summary>
<blockquote>

libexpat through 2.6.1 allows an XML Entity Expansion attack when there is isolated use of external parsers (created via XML_ExternalEntityParserCreate).

---
- expat 2.6.1-2 (bug https://bugs.debian.org/cgi-bin/bugreport.cgi?bug=1065868; unimportant)
https://github.com/libexpat/libexpat/pull/842
https://github.com/libexpat/libexpat/issues/839
Fixed by: https://github.com/libexpat/libexpat/commit/1d50b80cf31de87750103656f6eb693746854aa8
Tests: https://github.com/libexpat/libexpat/commit/072eca0b72373da103ce15f8f62d1d7b52695454
Expat provides API to mitigate expansion attacks, ultimately under control of the app using Expat
Cf. Billion laughs attack assessment for src:expat in CVE-2013-0340.

</blockquote>
</details>

<a href="https://scout.docker.com/v/CVE-2023-52426?s=debian&n=expat&ns=debian&t=deb&osn=debian&osv=12&vr=%3E%3D2.5.0-1%2Bdeb12u1"><img alt="low : CVE--2023--52426" src="https://img.shields.io/badge/CVE--2023--52426-lightgrey?label=low%20&labelColor=fce1a9"/></a> 

<table>
<tr><td>Affected range</td><td><code>>=2.5.0-1+deb12u1</code></td></tr>
<tr><td>Fixed version</td><td><strong>Not Fixed</strong></td></tr>
<tr><td>EPSS Score</td><td><code>0.019%</code></td></tr>
<tr><td>EPSS Percentile</td><td><code>3rd percentile</code></td></tr>
</table>

<details><summary>Description</summary>
<blockquote>

libexpat through 2.5.0 allows recursive XML Entity Expansion if XML_DTD is undefined at compile time.

---
- expat 2.6.0-1 (bug https://bugs.debian.org/cgi-bin/bugreport.cgi?bug=1063240; unimportant)
https://github.com/libexpat/libexpat/pull/777
https://github.com/libexpat/libexpat/commit/0f075ec8ecb5e43f8fdca5182f8cca4703da0404
https://github.com/libexpat/libexpat/pull/777#issuecomment-1965172301
CVE is for fixing billion laughs attacks for users compiling *without* XML_DTD defined,
which is not the case for Debian.

</blockquote>
</details>
</details></td></tr>

<tr><td valign="top">
<details><summary><img alt="critical: 0" src="https://img.shields.io/badge/C-0-lightgrey"/> <img alt="high: 0" src="https://img.shields.io/badge/H-0-lightgrey"/> <img alt="medium: 0" src="https://img.shields.io/badge/M-0-lightgrey"/> <img alt="low: 2" src="https://img.shields.io/badge/L-2-fce1a9"/> <!-- unspecified: 0 --><strong>apache2</strong> <code>2.4.62-1~deb12u2</code> (deb)</summary>

<small><code>pkg:deb/debian/apache2@2.4.62-1~deb12u2?os_distro=bookworm&os_name=debian&os_version=12</code></small><br/>

```dockerfile
# apache/Dockerfile (0:0)

```

<br/>

<a href="https://scout.docker.com/v/CVE-2007-0086?s=debian&n=apache2&ns=debian&t=deb&osn=debian&osv=12&vr=%3E%3D2.4.62-1%7Edeb12u2"><img alt="low : CVE--2007--0086" src="https://img.shields.io/badge/CVE--2007--0086-lightgrey?label=low%20&labelColor=fce1a9"/></a> 

<table>
<tr><td>Affected range</td><td><code>>=2.4.62-1~deb12u2</code></td></tr>
<tr><td>Fixed version</td><td><strong>Not Fixed</strong></td></tr>
<tr><td>EPSS Score</td><td><code>1.827%</code></td></tr>
<tr><td>EPSS Percentile</td><td><code>82nd percentile</code></td></tr>
</table>

<details><summary>Description</summary>
<blockquote>

The Apache HTTP Server, when accessed through a TCP connection with a large window size, allows remote attackers to cause a denial of service (network bandwidth consumption) via a Range header that specifies multiple copies of the same fragment.  NOTE: the severity of this issue has been disputed by third parties, who state that the large window size required by the attack is not normally supported or configured by the server, or that a DDoS-style attack would accomplish the same goal

---
- apache <unfixed> (unimportant)
- apache2 <unfixed> (unimportant)

</blockquote>
</details>

<a href="https://scout.docker.com/v/CVE-2003-1307?s=debian&n=apache2&ns=debian&t=deb&osn=debian&osv=12&vr=%3E%3D2.4.62-1%7Edeb12u2"><img alt="low : CVE--2003--1307" src="https://img.shields.io/badge/CVE--2003--1307-lightgrey?label=low%20&labelColor=fce1a9"/></a> 

<table>
<tr><td>Affected range</td><td><code>>=2.4.62-1~deb12u2</code></td></tr>
<tr><td>Fixed version</td><td><strong>Not Fixed</strong></td></tr>
<tr><td>EPSS Score</td><td><code>1.228%</code></td></tr>
<tr><td>EPSS Percentile</td><td><code>78th percentile</code></td></tr>
</table>

<details><summary>Description</summary>
<blockquote>

The mod_php module for the Apache HTTP Server allows local users with write access to PHP scripts to send signals to the server's process group and use the server's file descriptors, as demonstrated by sending a STOP signal, then intercepting incoming connections on the server's TCP port.  NOTE: the PHP developer has disputed this vulnerability, saying "The opened file descriptors are opened by Apache. It is the job of Apache to protect them ... Not a bug in PHP.

---
More of an apache flaw than a php flaw. And just one more reason
why you have lost as soon as an attacker can execute arbitrary
php scripts.
http://www.securityfocus.com/bid/9302
Probably an unfixable design flaw. But if you can execute a malicious
program, you can do $BADSTUFF anyway.
- apache <unfixed> (unimportant)
- apache2 <unfixed> (unimportant)

</blockquote>
</details>
</details></td></tr>

<tr><td valign="top">
<details><summary><img alt="critical: 0" src="https://img.shields.io/badge/C-0-lightgrey"/> <img alt="high: 0" src="https://img.shields.io/badge/H-0-lightgrey"/> <img alt="medium: 0" src="https://img.shields.io/badge/M-0-lightgrey"/> <img alt="low: 2" src="https://img.shields.io/badge/L-2-fce1a9"/> <!-- unspecified: 0 --><strong>libgcrypt20</strong> <code>1.10.1-3</code> (deb)</summary>

<small><code>pkg:deb/debian/libgcrypt20@1.10.1-3?os_distro=bookworm&os_name=debian&os_version=12</code></small><br/>

```dockerfile
# apache/Dockerfile (0:0)

```

<br/>

<a href="https://scout.docker.com/v/CVE-2024-2236?s=debian&n=libgcrypt20&ns=debian&t=deb&osn=debian&osv=12&vr=%3E%3D1.10.1-3"><img alt="low : CVE--2024--2236" src="https://img.shields.io/badge/CVE--2024--2236-lightgrey?label=low%20&labelColor=fce1a9"/></a> 

<table>
<tr><td>Affected range</td><td><code>>=1.10.1-3</code></td></tr>
<tr><td>Fixed version</td><td><strong>Not Fixed</strong></td></tr>
<tr><td>EPSS Score</td><td><code>0.228%</code></td></tr>
<tr><td>EPSS Percentile</td><td><code>46th percentile</code></td></tr>
</table>

<details><summary>Description</summary>
<blockquote>

A timing-based side-channel flaw was found in libgcrypt's RSA implementation. This issue may allow a remote attacker to initiate a Bleichenbacher-style attack, which can lead to the decryption of RSA ciphertexts.

---
- libgcrypt20 <unfixed> (unimportant; bug https://bugs.debian.org/cgi-bin/bugreport.cgi?bug=1065683)
https://bugzilla.redhat.com/show_bug.cgi?id=2268268
https://lists.gnupg.org/pipermail/gcrypt-devel/2024-March/005607.html
https://github.com/tomato42/marvin-toolkit/tree/master/example/libgcrypt
https://people.redhat.com/~hkario/marvin/
https://dev.gnupg.org/T7136
https://gitlab.com/redhat-crypto/libgcrypt/libgcrypt-mirror/-/merge_requests/17
Not in scope for libgcrypt security policy, work ongoing to add support in the protocol layer

</blockquote>
</details>

<a href="https://scout.docker.com/v/CVE-2018-6829?s=debian&n=libgcrypt20&ns=debian&t=deb&osn=debian&osv=12&vr=%3E%3D1.10.1-3"><img alt="low : CVE--2018--6829" src="https://img.shields.io/badge/CVE--2018--6829-lightgrey?label=low%20&labelColor=fce1a9"/></a> 

<table>
<tr><td>Affected range</td><td><code>>=1.10.1-3</code></td></tr>
<tr><td>Fixed version</td><td><strong>Not Fixed</strong></td></tr>
<tr><td>EPSS Score</td><td><code>1.266%</code></td></tr>
<tr><td>EPSS Percentile</td><td><code>78th percentile</code></td></tr>
</table>

<details><summary>Description</summary>
<blockquote>

cipher/elgamal.c in Libgcrypt through 1.8.2, when used to encrypt messages directly, improperly encodes plaintexts, which allows attackers to obtain sensitive information by reading ciphertext data (i.e., it does not have semantic security in face of a ciphertext-only attack). The Decisional Diffie-Hellman (DDH) assumption does not hold for Libgcrypt's ElGamal implementation.

---
- libgcrypt20 <unfixed> (unimportant)
- libgcrypt11 <removed> (unimportant)
- gnupg1 <unfixed> (unimportant)
- gnupg <removed> (unimportant)
https://github.com/weikengchen/attack-on-libgcrypt-elgamal
https://github.com/weikengchen/attack-on-libgcrypt-elgamal/wiki
https://lists.gnupg.org/pipermail/gcrypt-devel/2018-February/004394.html
GnuPG uses ElGamal in hybrid mode only.
This is not a vulnerability in libgcrypt, but in an application using
it in an insecure manner, see also
https://lists.gnupg.org/pipermail/gcrypt-devel/2018-February/004401.html

</blockquote>
</details>
</details></td></tr>

<tr><td valign="top">
<details><summary><img alt="critical: 0" src="https://img.shields.io/badge/C-0-lightgrey"/> <img alt="high: 0" src="https://img.shields.io/badge/H-0-lightgrey"/> <img alt="medium: 0" src="https://img.shields.io/badge/M-0-lightgrey"/> <img alt="low: 2" src="https://img.shields.io/badge/L-2-fce1a9"/> <!-- unspecified: 0 --><strong>curl</strong> <code>7.88.1-10+deb12u12</code> (deb)</summary>

<small><code>pkg:deb/debian/curl@7.88.1-10%2Bdeb12u12?os_distro=bookworm&os_name=debian&os_version=12</code></small><br/>

```dockerfile
# apache/Dockerfile (0:0)

```

<br/>

<a href="https://scout.docker.com/v/CVE-2025-0725?s=debian&n=curl&ns=debian&t=deb&osn=debian&osv=12&vr=%3E%3D7.88.1-10%2Bdeb12u12"><img alt="low : CVE--2025--0725" src="https://img.shields.io/badge/CVE--2025--0725-lightgrey?label=low%20&labelColor=fce1a9"/></a> 

<table>
<tr><td>Affected range</td><td><code>>=7.88.1-10+deb12u12</code></td></tr>
<tr><td>Fixed version</td><td><strong>Not Fixed</strong></td></tr>
<tr><td>EPSS Score</td><td><code>0.107%</code></td></tr>
<tr><td>EPSS Percentile</td><td><code>30th percentile</code></td></tr>
</table>

<details><summary>Description</summary>
<blockquote>

When libcurl is asked to perform automatic gzip decompression of content-encoded HTTP responses with the `CURLOPT_ACCEPT_ENCODING` option, **using zlib 1.2.0.3 or older**, an attacker-controlled integer overflow would make libcurl perform a buffer overflow.

---
- curl 8.12.0+git20250209.89ed161+ds-1 (unimportant)
https://curl.se/docs/CVE-2025-0725.html
Introduced with: https://github.com/curl/curl/commit/019c4088cfcca0d2b7c5cc4f52ca5dac0c616089 (curl-7_10_5)
Fixed by: https://github.com/curl/curl/commit/76f83f0db23846e254d940ec7fe141010077eb88 (curl-8_12_0)
Patch only drops officially support for zlib before 1.2.0.4
Can only be triggered when using ancient runtime zlib of version 1.2.0.3 or older

</blockquote>
</details>

<a href="https://scout.docker.com/v/CVE-2024-2379?s=debian&n=curl&ns=debian&t=deb&osn=debian&osv=12&vr=%3E%3D7.88.1-10%2Bdeb12u12"><img alt="low : CVE--2024--2379" src="https://img.shields.io/badge/CVE--2024--2379-lightgrey?label=low%20&labelColor=fce1a9"/></a> 

<table>
<tr><td>Affected range</td><td><code>>=7.88.1-10+deb12u12</code></td></tr>
<tr><td>Fixed version</td><td><strong>Not Fixed</strong></td></tr>
<tr><td>EPSS Score</td><td><code>0.203%</code></td></tr>
<tr><td>EPSS Percentile</td><td><code>43rd percentile</code></td></tr>
</table>

<details><summary>Description</summary>
<blockquote>

libcurl skips the certificate verification for a QUIC connection under certain conditions, when built to use wolfSSL. If told to use an unknown/bad cipher or curve, the error path accidentally skips the verification and returns OK, thus ignoring any certificate problems.

---
- curl 8.7.1-1 (unimportant)
https://curl.se/docs/CVE-2024-2379.html
Introduced by: https://github.com/curl/curl/commit/5d044ad9480a9f556f4b6a252d7533b1ba7fe57e (curl-8_6_0)
Fixed by: https://github.com/curl/curl/commit/aedbbdf18e689a5eee8dc39600914f5eda6c409c (curl-8_7_0)
curl in Debian not built with wolfSSL support

</blockquote>
</details>
</details></td></tr>

<tr><td valign="top">
<details><summary><img alt="critical: 0" src="https://img.shields.io/badge/C-0-lightgrey"/> <img alt="high: 0" src="https://img.shields.io/badge/H-0-lightgrey"/> <img alt="medium: 0" src="https://img.shields.io/badge/M-0-lightgrey"/> <img alt="low: 2" src="https://img.shields.io/badge/L-2-fce1a9"/> <!-- unspecified: 0 --><strong>perl</strong> <code>5.36.0-7+deb12u2</code> (deb)</summary>

<small><code>pkg:deb/debian/perl@5.36.0-7%2Bdeb12u2?os_distro=bookworm&os_name=debian&os_version=12</code></small><br/>

```dockerfile
# apache/Dockerfile (0:0)

```

<br/>

<a href="https://scout.docker.com/v/CVE-2023-31486?s=debian&n=perl&ns=debian&t=deb&osn=debian&osv=12&vr=%3E%3D5.36.0-7%2Bdeb12u2"><img alt="low : CVE--2023--31486" src="https://img.shields.io/badge/CVE--2023--31486-lightgrey?label=low%20&labelColor=fce1a9"/></a> 

<table>
<tr><td>Affected range</td><td><code>>=5.36.0-7+deb12u2</code></td></tr>
<tr><td>Fixed version</td><td><strong>Not Fixed</strong></td></tr>
<tr><td>EPSS Score</td><td><code>0.785%</code></td></tr>
<tr><td>EPSS Percentile</td><td><code>73rd percentile</code></td></tr>
</table>

<details><summary>Description</summary>
<blockquote>

HTTP::Tiny before 0.083, a Perl core module since 5.13.9 and available standalone on CPAN, has an insecure default TLS configuration where users must opt in to verify certificates.

---
- libhttp-tiny-perl 0.088-1 (bug https://bugs.debian.org/cgi-bin/bugreport.cgi?bug=962407; unimportant)
[experimental] - perl 5.38.0~rc2-1
- perl 5.38.2-2 (unimportant; bug https://bugs.debian.org/cgi-bin/bugreport.cgi?bug=954089)
https://www.openwall.com/lists/oss-security/2023/04/18/14
https://github.com/chansen/p5-http-tiny/issues/134
https://blog.hackeriet.no/perl-http-tiny-insecure-tls-default-affects-cpan-modules/
https://hackeriet.github.io/cpan-http-tiny-overview/
Applications need to explicitly opt in to enable verification.

</blockquote>
</details>

<a href="https://scout.docker.com/v/CVE-2011-4116?s=debian&n=perl&ns=debian&t=deb&osn=debian&osv=12&vr=%3E%3D5.36.0-7%2Bdeb12u2"><img alt="low : CVE--2011--4116" src="https://img.shields.io/badge/CVE--2011--4116-lightgrey?label=low%20&labelColor=fce1a9"/></a> 

<table>
<tr><td>Affected range</td><td><code>>=5.36.0-7+deb12u2</code></td></tr>
<tr><td>Fixed version</td><td><strong>Not Fixed</strong></td></tr>
<tr><td>EPSS Score</td><td><code>0.815%</code></td></tr>
<tr><td>EPSS Percentile</td><td><code>73rd percentile</code></td></tr>
</table>

<details><summary>Description</summary>
<blockquote>

_is_safe in the File::Temp module for Perl does not properly handle symlinks.

---
- perl <unfixed> (unimportant; bug https://bugs.debian.org/cgi-bin/bugreport.cgi?bug=776268)
http://thread.gmane.org/gmane.comp.security.oss.general/6174/focus=6177
https://github.com/Perl-Toolchain-Gang/File-Temp/issues/14

</blockquote>
</details>
</details></td></tr>

<tr><td valign="top">
<details><summary><img alt="critical: 0" src="https://img.shields.io/badge/C-0-lightgrey"/> <img alt="high: 0" src="https://img.shields.io/badge/H-0-lightgrey"/> <img alt="medium: 0" src="https://img.shields.io/badge/M-0-lightgrey"/> <img alt="low: 1" src="https://img.shields.io/badge/L-1-fce1a9"/> <!-- unspecified: 0 --><strong>util-linux</strong> <code>2.38.1-5+deb12u3</code> (deb)</summary>

<small><code>pkg:deb/debian/util-linux@2.38.1-5%2Bdeb12u3?os_distro=bookworm&os_name=debian&os_version=12</code></small><br/>

```dockerfile
# apache/Dockerfile (0:0)

```

<br/>

<a href="https://scout.docker.com/v/CVE-2022-0563?s=debian&n=util-linux&ns=debian&t=deb&osn=debian&osv=12&vr=%3E%3D2.38.1-5%2Bdeb12u3"><img alt="low : CVE--2022--0563" src="https://img.shields.io/badge/CVE--2022--0563-lightgrey?label=low%20&labelColor=fce1a9"/></a> 

<table>
<tr><td>Affected range</td><td><code>>=2.38.1-5+deb12u3</code></td></tr>
<tr><td>Fixed version</td><td><strong>Not Fixed</strong></td></tr>
<tr><td>EPSS Score</td><td><code>0.025%</code></td></tr>
<tr><td>EPSS Percentile</td><td><code>5th percentile</code></td></tr>
</table>

<details><summary>Description</summary>
<blockquote>

A flaw was found in the util-linux chfn and chsh utilities when compiled with Readline support. The Readline library uses an "INPUTRC" environment variable to get a path to the library config file. When the library cannot parse the specified file, it prints an error message containing data from the file. This flaw allows an unprivileged user to read root-owned files, potentially leading to privilege escalation. This flaw affects util-linux versions prior to 2.37.4.

---
- util-linux <unfixed> (unimportant)
https://bugzilla.redhat.com/show_bug.cgi?id=2053151
https://lore.kernel.org/util-linux/20220214110609.msiwlm457ngoic6w@ws.net.home/T/#u
https://github.com/util-linux/util-linux/commit/faa5a3a83ad0cb5e2c303edbfd8cd823c9d94c17
util-linux in Debian does build with readline support but chfn and chsh are provided
by src:shadow and util-linux is configured with --disable-chfn-chsh

</blockquote>
</details>
</details></td></tr>

<tr><td valign="top">
<details><summary><img alt="critical: 0" src="https://img.shields.io/badge/C-0-lightgrey"/> <img alt="high: 0" src="https://img.shields.io/badge/H-0-lightgrey"/> <img alt="medium: 0" src="https://img.shields.io/badge/M-0-lightgrey"/> <img alt="low: 1" src="https://img.shields.io/badge/L-1-fce1a9"/> <!-- unspecified: 0 --><strong>apt</strong> <code>2.6.1</code> (deb)</summary>

<small><code>pkg:deb/debian/apt@2.6.1?os_distro=bookworm&os_name=debian&os_version=12</code></small><br/>

```dockerfile
# apache/Dockerfile (0:0)

```

<br/>

<a href="https://scout.docker.com/v/CVE-2011-3374?s=debian&n=apt&ns=debian&t=deb&osn=debian&osv=12&vr=%3E%3D2.6.1"><img alt="low : CVE--2011--3374" src="https://img.shields.io/badge/CVE--2011--3374-lightgrey?label=low%20&labelColor=fce1a9"/></a> 

<table>
<tr><td>Affected range</td><td><code>>=2.6.1</code></td></tr>
<tr><td>Fixed version</td><td><strong>Not Fixed</strong></td></tr>
<tr><td>EPSS Score</td><td><code>1.509%</code></td></tr>
<tr><td>EPSS Percentile</td><td><code>80th percentile</code></td></tr>
</table>

<details><summary>Description</summary>
<blockquote>

It was found that apt-key in apt, all versions, do not correctly validate gpg keys with the master keyring, leading to a potential man-in-the-middle attack.

---
- apt <unfixed> (unimportant; bug https://bugs.debian.org/cgi-bin/bugreport.cgi?bug=642480)
Not exploitable in Debian, since no keyring URI is defined

</blockquote>
</details>
</details></td></tr>

<tr><td valign="top">
<details><summary><img alt="critical: 0" src="https://img.shields.io/badge/C-0-lightgrey"/> <img alt="high: 0" src="https://img.shields.io/badge/H-0-lightgrey"/> <img alt="medium: 0" src="https://img.shields.io/badge/M-0-lightgrey"/> <img alt="low: 1" src="https://img.shields.io/badge/L-1-fce1a9"/> <!-- unspecified: 0 --><strong>gcc-12</strong> <code>12.2.0-14+deb12u1</code> (deb)</summary>

<small><code>pkg:deb/debian/gcc-12@12.2.0-14%2Bdeb12u1?os_distro=bookworm&os_name=debian&os_version=12</code></small><br/>

```dockerfile
# apache/Dockerfile (0:0)

```

<br/>

<a href="https://scout.docker.com/v/CVE-2022-27943?s=debian&n=gcc-12&ns=debian&t=deb&osn=debian&osv=12&vr=%3E%3D12.2.0-14%2Bdeb12u1"><img alt="low : CVE--2022--27943" src="https://img.shields.io/badge/CVE--2022--27943-lightgrey?label=low%20&labelColor=fce1a9"/></a> 

<table>
<tr><td>Affected range</td><td><code>>=12.2.0-14+deb12u1</code></td></tr>
<tr><td>Fixed version</td><td><strong>Not Fixed</strong></td></tr>
<tr><td>EPSS Score</td><td><code>0.044%</code></td></tr>
<tr><td>EPSS Percentile</td><td><code>13th percentile</code></td></tr>
</table>

<details><summary>Description</summary>
<blockquote>

libiberty/rust-demangle.c in GNU GCC 11.2 allows stack consumption in demangle_const, as demonstrated by nm-new.

---
- gcc-12 <unfixed> (unimportant)
Negligible security impact
https://gcc.gnu.org/bugzilla/show_bug.cgi?id=105039

</blockquote>
</details>
</details></td></tr>

<tr><td valign="top">
<details><summary><img alt="critical: 0" src="https://img.shields.io/badge/C-0-lightgrey"/> <img alt="high: 0" src="https://img.shields.io/badge/H-0-lightgrey"/> <img alt="medium: 0" src="https://img.shields.io/badge/M-0-lightgrey"/> <img alt="low: 1" src="https://img.shields.io/badge/L-1-fce1a9"/> <!-- unspecified: 0 --><strong>gnutls28</strong> <code>3.7.9-2+deb12u4</code> (deb)</summary>

<small><code>pkg:deb/debian/gnutls28@3.7.9-2%2Bdeb12u4?os_distro=bookworm&os_name=debian&os_version=12</code></small><br/>

```dockerfile
# apache/Dockerfile (0:0)

```

<br/>

<a href="https://scout.docker.com/v/CVE-2011-3389?s=debian&n=gnutls28&ns=debian&t=deb&osn=debian&osv=12&vr=%3E%3D3.7.9-2%2Bdeb12u4"><img alt="low : CVE--2011--3389" src="https://img.shields.io/badge/CVE--2011--3389-lightgrey?label=low%20&labelColor=fce1a9"/></a> 

<table>
<tr><td>Affected range</td><td><code>>=3.7.9-2+deb12u4</code></td></tr>
<tr><td>Fixed version</td><td><strong>Not Fixed</strong></td></tr>
<tr><td>EPSS Score</td><td><code>5.423%</code></td></tr>
<tr><td>EPSS Percentile</td><td><code>90th percentile</code></td></tr>
</table>

<details><summary>Description</summary>
<blockquote>

The SSL protocol, as used in certain configurations in Microsoft Windows and Microsoft Internet Explorer, Mozilla Firefox, Google Chrome, Opera, and other products, encrypts data by using CBC mode with chained initialization vectors, which allows man-in-the-middle attackers to obtain plaintext HTTP headers via a blockwise chosen-boundary attack (BCBA) on an HTTPS session, in conjunction with JavaScript code that uses (1) the HTML5 WebSocket API, (2) the Java URLConnection API, or (3) the Silverlight WebClient API, aka a "BEAST" attack.

---
- sun-java6 <removed> (bug https://bugs.debian.org/cgi-bin/bugreport.cgi?bug=645881)
[lenny] - sun-java6 <no-dsa> (Non-free not supported)
[squeeze] - sun-java6 <no-dsa> (Non-free not supported)
- openjdk-6 6b23~pre11-1
- openjdk-7 7~b147-2.0-1
- iceweasel <not-affected> (Vulnerable code not present)
http://blog.mozilla.com/security/2011/09/27/attack-against-tls-protected-communications/
- chromium-browser 15.0.874.106~r107270-1
[squeeze] - chromium-browser <end-of-life>
- lighttpd 1.4.30-1
strictly speaking this is no lighttpd issue, but lighttpd adds a workaround
- curl 7.24.0-1
http://curl.haxx.se/docs/adv_20120124B.html
- python2.6 2.6.8-0.1 (bug https://bugs.debian.org/cgi-bin/bugreport.cgi?bug=684511)
[squeeze] - python2.6 <no-dsa> (Minor issue)
- python2.7 2.7.3~rc1-1
- python3.1 <unfixed> (bug https://bugs.debian.org/cgi-bin/bugreport.cgi?bug=678998)
[squeeze] - python3.1 <no-dsa> (Minor issue)
- python3.2 3.2.3~rc1-1
http://bugs.python.org/issue13885
python3.1 is fixed starting 3.1.5
- cyassl <removed>
- gnutls26 <removed> (unimportant)
- gnutls28 <unfixed> (unimportant)
No mitigation for gnutls, it is recommended to use TLS 1.1 or 1.2 which is supported since 2.0.0
- haskell-tls <unfixed> (unimportant)
No mitigation for haskell-tls, it is recommended to use TLS 1.1, which is supported since 0.2
- matrixssl <removed> (low)
[squeeze] - matrixssl <no-dsa> (Minor issue)
[wheezy] - matrixssl <no-dsa> (Minor issue)
matrixssl fix this upstream in 3.2.2
- bouncycastle 1.49+dfsg-1
[squeeze] - bouncycastle <no-dsa> (Minor issue)
[wheezy] - bouncycastle <no-dsa> (Minor issue)
No mitigation for bouncycastle, it is recommended to use TLS 1.1, which is supported since 1.4.9
- nss 3.13.1.with.ckbi.1.88-1
https://bugzilla.mozilla.org/show_bug.cgi?id=665814
https://hg.mozilla.org/projects/nss/rev/7f7446fcc7ab
- polarssl <unfixed> (unimportant)
No mitigation for polarssl, it is recommended to use TLS 1.1, which is supported in all releases
- tlslite <removed>
[wheezy] - tlslite <no-dsa> (Minor issue)
- pound 2.6-2
Pound 2.6-2 added an anti_beast.patch to mitigate BEAST attacks.
- erlang 1:15.b-dfsg-1
[squeeze] - erlang <no-dsa> (Minor issue)
- asterisk 1:13.7.2~dfsg-1
[jessie] - asterisk 1:11.13.1~dfsg-2+deb8u1
[wheezy] - asterisk <no-dsa> (Minor issue)
[squeeze] - asterisk <end-of-life> (Not supported in Squeeze LTS)
http://downloads.digium.com/pub/security/AST-2016-001.html
https://issues.asterisk.org/jira/browse/ASTERISK-24972
patch for 11 (jessie): https://code.asterisk.org/code/changelog/asterisk?cs=f233bcd81d85626ce5bdd27b05bc95d131faf3e4
all versions vulnerable, backport required for wheezy

</blockquote>
</details>
</details></td></tr>

<tr><td valign="top">
<details><summary><img alt="critical: 0" src="https://img.shields.io/badge/C-0-lightgrey"/> <img alt="high: 0" src="https://img.shields.io/badge/H-0-lightgrey"/> <img alt="medium: 0" src="https://img.shields.io/badge/M-0-lightgrey"/> <img alt="low: 1" src="https://img.shields.io/badge/L-1-fce1a9"/> <!-- unspecified: 0 --><strong>shadow</strong> <code>1:4.13+dfsg1-1+deb12u1</code> (deb)</summary>

<small><code>pkg:deb/debian/shadow@1%3A4.13%2Bdfsg1-1%2Bdeb12u1?os_distro=bookworm&os_name=debian&os_version=12</code></small><br/>

```dockerfile
# apache/Dockerfile (0:0)

```

<br/>

<a href="https://scout.docker.com/v/CVE-2007-5686?s=debian&n=shadow&ns=debian&t=deb&osn=debian&osv=12&vr=%3E%3D1%3A4.13%2Bdfsg1-1%2Bdeb12u1"><img alt="low : CVE--2007--5686" src="https://img.shields.io/badge/CVE--2007--5686-lightgrey?label=low%20&labelColor=fce1a9"/></a> 

<table>
<tr><td>Affected range</td><td><code>>=1:4.13+dfsg1-1+deb12u1</code></td></tr>
<tr><td>Fixed version</td><td><strong>Not Fixed</strong></td></tr>
<tr><td>EPSS Score</td><td><code>0.245%</code></td></tr>
<tr><td>EPSS Percentile</td><td><code>48th percentile</code></td></tr>
</table>

<details><summary>Description</summary>
<blockquote>

initscripts in rPath Linux 1 sets insecure permissions for the /var/log/btmp file, which allows local users to obtain sensitive information regarding authentication attempts.  NOTE: because sshd detects the insecure permissions and does not log certain events, this also prevents sshd from logging failed authentication attempts by remote attackers.

---
- shadow <unfixed> (unimportant)
See #290803, on Debian LOG_UNKFAIL_ENAB in login.defs is set to no so
unknown usernames are not recorded on login failures

</blockquote>
</details>
</details></td></tr>

<tr><td valign="top">
<details><summary><img alt="critical: 0" src="https://img.shields.io/badge/C-0-lightgrey"/> <img alt="high: 0" src="https://img.shields.io/badge/H-0-lightgrey"/> <img alt="medium: 0" src="https://img.shields.io/badge/M-0-lightgrey"/> <img alt="low: 1" src="https://img.shields.io/badge/L-1-fce1a9"/> <!-- unspecified: 0 --><strong>sqlite3</strong> <code>3.40.1-2+deb12u1</code> (deb)</summary>

<small><code>pkg:deb/debian/sqlite3@3.40.1-2%2Bdeb12u1?os_distro=bookworm&os_name=debian&os_version=12</code></small><br/>

```dockerfile
# apache/Dockerfile (0:0)

```

<br/>

<a href="https://scout.docker.com/v/CVE-2021-45346?s=debian&n=sqlite3&ns=debian&t=deb&osn=debian&osv=12&vr=%3E%3D3.40.1-2%2Bdeb12u1"><img alt="low : CVE--2021--45346" src="https://img.shields.io/badge/CVE--2021--45346-lightgrey?label=low%20&labelColor=fce1a9"/></a> 

<table>
<tr><td>Affected range</td><td><code>>=3.40.1-2+deb12u1</code></td></tr>
<tr><td>Fixed version</td><td><strong>Not Fixed</strong></td></tr>
<tr><td>EPSS Score</td><td><code>0.161%</code></td></tr>
<tr><td>EPSS Percentile</td><td><code>38th percentile</code></td></tr>
</table>

<details><summary>Description</summary>
<blockquote>

A Memory Leak vulnerability exists in SQLite Project SQLite3 3.35.1 and 3.37.0 via maliciously crafted SQL Queries (made via editing the Database File), it is possible to query a record, and leak subsequent bytes of memory that extend beyond the record, which could let a malicious user obtain sensitive information. NOTE: The developer disputes this as a vulnerability stating that If you give SQLite a corrupted database file and submit a query against the database, it might read parts of the database that you did not intend or expect.

---
- sqlite3 <unfixed> (unimportant; bug https://bugs.debian.org/cgi-bin/bugreport.cgi?bug=1005974)
- sqlite <removed> (unimportant)
https://github.com/guyinatuxedo/sqlite3_record_leaking
https://bugzilla.redhat.com/show_bug.cgi?id=2054793
https://sqlite.org/forum/forumpost/056d557c2f8c452ed5bb9c215414c802b215ce437be82be047726e521342161e
Negligible security impact

</blockquote>
</details>
</details></td></tr>

<tr><td valign="top">
<details><summary><img alt="critical: 0" src="https://img.shields.io/badge/C-0-lightgrey"/> <img alt="high: 0" src="https://img.shields.io/badge/H-0-lightgrey"/> <img alt="medium: 0" src="https://img.shields.io/badge/M-0-lightgrey"/> <img alt="low: 1" src="https://img.shields.io/badge/L-1-fce1a9"/> <!-- unspecified: 0 --><strong>openssl</strong> <code>3.0.16-1~deb12u1</code> (deb)</summary>

<small><code>pkg:deb/debian/openssl@3.0.16-1~deb12u1?os_distro=bookworm&os_name=debian&os_version=12</code></small><br/>

```dockerfile
# apache/Dockerfile (0:0)

```

<br/>

<a href="https://scout.docker.com/v/CVE-2010-0928?s=debian&n=openssl&ns=debian&t=deb&osn=debian&osv=12&vr=%3E%3D3.0.11-1%7Edeb12u2"><img alt="low : CVE--2010--0928" src="https://img.shields.io/badge/CVE--2010--0928-lightgrey?label=low%20&labelColor=fce1a9"/></a> 

<table>
<tr><td>Affected range</td><td><code>>=3.0.11-1~deb12u2</code></td></tr>
<tr><td>Fixed version</td><td><strong>Not Fixed</strong></td></tr>
<tr><td>EPSS Score</td><td><code>0.098%</code></td></tr>
<tr><td>EPSS Percentile</td><td><code>28th percentile</code></td></tr>
</table>

<details><summary>Description</summary>
<blockquote>

OpenSSL 0.9.8i on the Gaisler Research LEON3 SoC on the Xilinx Virtex-II Pro FPGA uses a Fixed Width Exponentiation (FWE) algorithm for certain signature calculations, and does not verify the signature before providing it to a caller, which makes it easier for physically proximate attackers to determine the private key via a modified supply voltage for the microprocessor, related to a "fault-based attack."

---
http://www.eecs.umich.edu/~valeria/research/publications/DATE10RSA.pdf
https://github.com/openssl/openssl/discussions/24540
Fault injection based attacks are not within OpenSSLs threat model according
to the security policy: https://www.openssl.org/policies/general/security-policy.html

</blockquote>
</details>
</details></td></tr>

<tr><td valign="top">
<details><summary><img alt="critical: 0" src="https://img.shields.io/badge/C-0-lightgrey"/> <img alt="high: 0" src="https://img.shields.io/badge/H-0-lightgrey"/> <img alt="medium: 0" src="https://img.shields.io/badge/M-0-lightgrey"/> <img alt="low: 1" src="https://img.shields.io/badge/L-1-fce1a9"/> <!-- unspecified: 0 --><strong>jansson</strong> <code>2.14-2</code> (deb)</summary>

<small><code>pkg:deb/debian/jansson@2.14-2?os_distro=bookworm&os_name=debian&os_version=12</code></small><br/>

```dockerfile
# apache/Dockerfile (0:0)

```

<br/>

<a href="https://scout.docker.com/v/CVE-2020-36325?s=debian&n=jansson&ns=debian&t=deb&osn=debian&osv=12&vr=%3E%3D2.14-2"><img alt="low : CVE--2020--36325" src="https://img.shields.io/badge/CVE--2020--36325-lightgrey?label=low%20&labelColor=fce1a9"/></a> 

<table>
<tr><td>Affected range</td><td><code>>=2.14-2</code></td></tr>
<tr><td>Fixed version</td><td><strong>Not Fixed</strong></td></tr>
<tr><td>EPSS Score</td><td><code>0.412%</code></td></tr>
<tr><td>EPSS Percentile</td><td><code>61st percentile</code></td></tr>
</table>

<details><summary>Description</summary>
<blockquote>

An issue was discovered in Jansson through 2.13.1. Due to a parsing error in json_loads, there's an out-of-bounds read-access bug. NOTE: the vendor reports that this only occurs when a programmer fails to follow the API specification

---
- jansson <unfixed> (unimportant)
https://github.com/akheron/jansson/issues/548
Disputed security impact (only if programmer fails to follow API specifications)

</blockquote>
</details>
</details></td></tr>

<tr><td valign="top">
<details><summary><img alt="critical: 0" src="https://img.shields.io/badge/C-0-lightgrey"/> <img alt="high: 0" src="https://img.shields.io/badge/H-0-lightgrey"/> <img alt="medium: 0" src="https://img.shields.io/badge/M-0-lightgrey"/> <img alt="low: 1" src="https://img.shields.io/badge/L-1-fce1a9"/> <!-- unspecified: 0 --><strong>gnupg2</strong> <code>2.2.40-1.1</code> (deb)</summary>

<small><code>pkg:deb/debian/gnupg2@2.2.40-1.1?os_distro=bookworm&os_name=debian&os_version=12</code></small><br/>

```dockerfile
# apache/Dockerfile (0:0)

```

<br/>

<a href="https://scout.docker.com/v/CVE-2022-3219?s=debian&n=gnupg2&ns=debian&t=deb&osn=debian&osv=12&vr=%3E%3D2.2.40-1.1"><img alt="low : CVE--2022--3219" src="https://img.shields.io/badge/CVE--2022--3219-lightgrey?label=low%20&labelColor=fce1a9"/></a> 

<table>
<tr><td>Affected range</td><td><code>>=2.2.40-1.1</code></td></tr>
<tr><td>Fixed version</td><td><strong>Not Fixed</strong></td></tr>
<tr><td>EPSS Score</td><td><code>0.012%</code></td></tr>
<tr><td>EPSS Percentile</td><td><code>1st percentile</code></td></tr>
</table>

<details><summary>Description</summary>
<blockquote>

GnuPG can be made to spin on a relatively small input by (for example) crafting a public key with thousands of signatures attached, compressed down to just a few KB.

---
- gnupg2 <unfixed> (unimportant)
https://bugzilla.redhat.com/show_bug.cgi?id=2127010
https://dev.gnupg.org/D556
https://dev.gnupg.org/T5993
https://www.openwall.com/lists/oss-security/2022/07/04/8
GnuPG upstream is not implementing this change.

</blockquote>
</details>
</details></td></tr>

<tr><td valign="top">
<details><summary><img alt="critical: 0" src="https://img.shields.io/badge/C-0-lightgrey"/> <img alt="high: 0" src="https://img.shields.io/badge/H-0-lightgrey"/> <img alt="medium: 0" src="https://img.shields.io/badge/M-0-lightgrey"/> <img alt="low: 1" src="https://img.shields.io/badge/L-1-fce1a9"/> <!-- unspecified: 0 --><strong>re2c</strong> <code>3.0-2</code> (deb)</summary>

<small><code>pkg:deb/debian/re2c@3.0-2?os_distro=bookworm&os_name=debian&os_version=12</code></small><br/>

```dockerfile
# apache/Dockerfile (0:0)

```

<br/>

<a href="https://scout.docker.com/v/CVE-2018-21232?s=debian&n=re2c&ns=debian&t=deb&osn=debian&osv=12&vr=%3E%3D3.0-2"><img alt="low : CVE--2018--21232" src="https://img.shields.io/badge/CVE--2018--21232-lightgrey?label=low%20&labelColor=fce1a9"/></a> 

<table>
<tr><td>Affected range</td><td><code>>=3.0-2</code></td></tr>
<tr><td>Fixed version</td><td><strong>Not Fixed</strong></td></tr>
<tr><td>EPSS Score</td><td><code>0.039%</code></td></tr>
<tr><td>EPSS Percentile</td><td><code>11th percentile</code></td></tr>
</table>

<details><summary>Description</summary>
<blockquote>

re2c before 2.0 has uncontrolled recursion that causes stack consumption in find_fixed_tags.

---
- re2c <unfixed> (unimportant)
https://github.com/skvadrik/re2c/issues/219
Fixed by: https://github.com/skvadrik/re2c/commit/5fffb1870181d6179118586e21ed2889b8b4abc8
https://www.openwall.com/lists/oss-security/2020/04/27/2
Crash im CLI tool, no security impact

</blockquote>
</details>
</details></td></tr>

<tr><td valign="top">
<details><summary><img alt="critical: 0" src="https://img.shields.io/badge/C-0-lightgrey"/> <img alt="high: 0" src="https://img.shields.io/badge/H-0-lightgrey"/> <img alt="medium: 0" src="https://img.shields.io/badge/M-0-lightgrey"/> <img alt="low: 1" src="https://img.shields.io/badge/L-1-fce1a9"/> <!-- unspecified: 0 --><strong>tar</strong> <code>1.34+dfsg-1.2+deb12u1</code> (deb)</summary>

<small><code>pkg:deb/debian/tar@1.34%2Bdfsg-1.2%2Bdeb12u1?os_distro=bookworm&os_name=debian&os_version=12</code></small><br/>

```dockerfile
# apache/Dockerfile (0:0)

```

<br/>

<a href="https://scout.docker.com/v/CVE-2005-2541?s=debian&n=tar&ns=debian&t=deb&osn=debian&osv=12&vr=%3E%3D1.34%2Bdfsg-1.2%2Bdeb12u1"><img alt="low : CVE--2005--2541" src="https://img.shields.io/badge/CVE--2005--2541-lightgrey?label=low%20&labelColor=fce1a9"/></a> 

<table>
<tr><td>Affected range</td><td><code>>=1.34+dfsg-1.2+deb12u1</code></td></tr>
<tr><td>Fixed version</td><td><strong>Not Fixed</strong></td></tr>
<tr><td>EPSS Score</td><td><code>2.806%</code></td></tr>
<tr><td>EPSS Percentile</td><td><code>85th percentile</code></td></tr>
</table>

<details><summary>Description</summary>
<blockquote>

Tar 1.15.1 does not properly warn the user when extracting setuid or setgid files, which may allow local users or remote attackers to gain privileges.

---
This is intended behaviour, after all tar is an archiving tool and you
need to give -p as a command line flag
- tar <unfixed> (bug https://bugs.debian.org/cgi-bin/bugreport.cgi?bug=328228; unimportant)

</blockquote>
</details>
</details></td></tr>

<tr><td valign="top">
<details><summary><img alt="critical: 0" src="https://img.shields.io/badge/C-0-lightgrey"/> <img alt="high: 0" src="https://img.shields.io/badge/H-0-lightgrey"/> <img alt="medium: 0" src="https://img.shields.io/badge/M-0-lightgrey"/> <img alt="low: 1" src="https://img.shields.io/badge/L-1-fce1a9"/> <!-- unspecified: 0 --><strong>coreutils</strong> <code>9.1-1</code> (deb)</summary>

<small><code>pkg:deb/debian/coreutils@9.1-1?os_distro=bookworm&os_name=debian&os_version=12</code></small><br/>

```dockerfile
# apache/Dockerfile (0:0)

```

<br/>

<a href="https://scout.docker.com/v/CVE-2017-18018?s=debian&n=coreutils&ns=debian&t=deb&osn=debian&osv=12&vr=%3E%3D9.1-1"><img alt="low : CVE--2017--18018" src="https://img.shields.io/badge/CVE--2017--18018-lightgrey?label=low%20&labelColor=fce1a9"/></a> 

<table>
<tr><td>Affected range</td><td><code>>=9.1-1</code></td></tr>
<tr><td>Fixed version</td><td><strong>Not Fixed</strong></td></tr>
<tr><td>EPSS Score</td><td><code>0.046%</code></td></tr>
<tr><td>EPSS Percentile</td><td><code>14th percentile</code></td></tr>
</table>

<details><summary>Description</summary>
<blockquote>

In GNU Coreutils through 8.29, chown-core.c in chown and chgrp does not prevent replacement of a plain file with a symlink during use of the POSIX "-R -L" options, which allows local users to modify the ownership of arbitrary files by leveraging a race condition.

---
- coreutils <unfixed> (unimportant)
http://lists.gnu.org/archive/html/coreutils/2017-12/msg00045.html
https://www.openwall.com/lists/oss-security/2018/01/04/3
Documentation patches proposed:
https://lists.gnu.org/archive/html/coreutils/2017-12/msg00072.html
https://lists.gnu.org/archive/html/coreutils/2017-12/msg00073.html
Neutralised by kernel hardening

</blockquote>
</details>
</details></td></tr>

<tr><td valign="top">
<details><summary><img alt="critical: 0" src="https://img.shields.io/badge/C-0-lightgrey"/> <img alt="high: 0" src="https://img.shields.io/badge/H-0-lightgrey"/> <img alt="medium: 0" src="https://img.shields.io/badge/M-0-lightgrey"/> <img alt="low: 1" src="https://img.shields.io/badge/L-1-fce1a9"/> <!-- unspecified: 0 --><strong>libpng1.6</strong> <code>1.6.39-2</code> (deb)</summary>

<small><code>pkg:deb/debian/libpng1.6@1.6.39-2?os_distro=bookworm&os_name=debian&os_version=12</code></small><br/>

```dockerfile
# apache/Dockerfile (5:55)
RUN set -ex; \
    \
    apt-get update; \
    apt-get install -y --no-install-recommends \
        gnupg \
        dirmngr \
    ; \
    \
    savedAptMark="$(apt-mark showmanual)"; \
    \
    apt-get install -y --no-install-recommends \
        libbz2-dev \
        libfreetype6-dev \
        libjpeg-dev \
        libpng-dev \
        libwebp-dev \
        libxpm-dev \
        libzip-dev \
    ; \
    \
    docker-php-ext-configure gd --with-freetype --with-jpeg --with-webp --with-xpm; \
    docker-php-ext-install -j "$(nproc)" \
        bz2 \
        gd \
        mysqli \
        opcache \
        zip \
        bcmath \
    ; \
    \
    apt-mark auto '.*' > /dev/null; \
    apt-mark manual $savedAptMark; \
    extdir="$(php -r 'echo ini_get("extension_dir");')"; \
    ldd "$extdir"/*.so \
        | awk '/=>/ { so = $(NF-1); if (index(so, "/usr/local/") == 1) { next }; gsub("^/(usr/)?", "", so); print so }' \
        | sort -u \
        | xargs -r dpkg-query -S \
        | cut -d: -f1 \
        | sort -u \
        | xargs -rt apt-mark manual; \
    \
    # start: Apache specific build
    a2enmod remoteip; \
    # end: Apache specific build
    \
    apt-get purge -y --auto-remove -o APT::AutoRemove::RecommendsImportant=false; \
    rm -rf /var/lib/apt/lists/*; \
    ldd "$extdir"/*.so | grep -qzv "=> not found" || (echo "Sanity check failed: missing libraries:"; ldd "$extdir"/*.so | grep " => not found"; exit 1); \
    ldd "$extdir"/*.so | grep -q "libzip.so.* => .*/libzip.so.*" || (echo "Sanity check failed: libzip.so is not referenced"; ldd "$extdir"/*.so; exit 1); \
    err="$(php --version 3>&1 1>&2 2>&3)"; \
    [ -z "$err" ] || (echo "Sanity check failed: php returned errors; $err"; exit 1;);
```

<br/>

<a href="https://scout.docker.com/v/CVE-2021-4214?s=debian&n=libpng1.6&ns=debian&t=deb&osn=debian&osv=12&vr=%3E%3D1.6.39-2"><img alt="low : CVE--2021--4214" src="https://img.shields.io/badge/CVE--2021--4214-lightgrey?label=low%20&labelColor=fce1a9"/></a> 

<table>
<tr><td>Affected range</td><td><code>>=1.6.39-2</code></td></tr>
<tr><td>Fixed version</td><td><strong>Not Fixed</strong></td></tr>
<tr><td>EPSS Score</td><td><code>0.034%</code></td></tr>
<tr><td>EPSS Percentile</td><td><code>9th percentile</code></td></tr>
</table>

<details><summary>Description</summary>
<blockquote>

A heap overflow flaw was found in libpngs' pngimage.c program. This flaw allows an attacker with local network access to pass a specially crafted PNG file to the pngimage utility, causing an application to crash, leading to a denial of service.

---
- libpng1.6 <unfixed> (unimportant)
https://github.com/glennrp/libpng/issues/302
Crash in CLI package, not shipped in binary packages

</blockquote>
</details>
</details></td></tr>
</table>

