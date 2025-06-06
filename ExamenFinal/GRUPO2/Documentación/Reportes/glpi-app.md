<a href="https://github.com/jaiderospina/DevSecOps2025/blob/main/ExamenFinal/GRUPO2/Documentaci%C3%B3n/README.md#%EF%B8%8F-2-fase-de-desarrollo" target="_blank">
  <img src="https://img.shields.io/badge/Regresar-Fase%202-blue" alt="Regresar: Fase 2" />
</a>



<h2>:mag: Vulnerabilities of <code>jyrodriguezg95/glpi-app:latest</code></h2>

<details open="true"><summary>:package: Image Reference</strong> <code>jyrodriguezg95/glpi-app:latest</code></summary>
<table>
<tr><td>digest</td><td><code>sha256:5f24396eca93769c6ee364506101d9563a33ab969be76b0ff58690542f2a8565</code></td><tr><tr><td>vulnerabilities</td><td><img alt="critical: 0" src="https://img.shields.io/badge/critical-0-lightgrey"/> <img alt="high: 3" src="https://img.shields.io/badge/high-3-e25d68"/> <img alt="medium: 16" src="https://img.shields.io/badge/medium-16-fbb552"/> <img alt="low: 27" src="https://img.shields.io/badge/low-27-fce1a9"/> <!-- unspecified: 0 --></td></tr>
<tr><td>platform</td><td>linux/amd64</td></tr>
<tr><td>size</td><td>236 MB</td></tr>
<tr><td>packages</td><td>571</td></tr>
</table>
</details></table>
</details>

<table>
<tr><td valign="top">
<details><summary><img alt="critical: 0" src="https://img.shields.io/badge/C-0-lightgrey"/> <img alt="high: 2" src="https://img.shields.io/badge/H-2-e25d68"/> <img alt="medium: 3" src="https://img.shields.io/badge/M-3-fbb552"/> <img alt="low: 3" src="https://img.shields.io/badge/L-3-fce1a9"/> <!-- unspecified: 0 --><strong>cryptography</strong> <code>3.4.8</code> (pypi)</summary>

<small><code>pkg:pypi/cryptography@3.4.8</code></small><br/>
<a href="https://scout.docker.com/v/CVE-2023-50782?s=github&n=cryptography&t=pypi&vr=%3C42.0.0"><img alt="high 8.7: CVE--2023--50782" src="https://img.shields.io/badge/CVE--2023--50782-lightgrey?label=high%208.7&labelColor=e25d68"/></a> <i>Observable Discrepancy</i>

<table>
<tr><td>Affected range</td><td><code><42.0.0</code></td></tr>
<tr><td>Fixed version</td><td><code>42.0.0</code></td></tr>
<tr><td>CVSS Score</td><td><code>8.7</code></td></tr>
<tr><td>CVSS Vector</td><td><code>CVSS:4.0/AV:N/AC:L/AT:N/PR:N/UI:N/VC:H/VI:N/VA:N/SC:N/SI:N/SA:N</code></td></tr>
<tr><td>EPSS Score</td><td><code>0.521%</code></td></tr>
<tr><td>EPSS Percentile</td><td><code>66th percentile</code></td></tr>
</table>

<details><summary>Description</summary>
<blockquote>

A flaw was found in the python-cryptography package. This issue may allow a remote attacker to decrypt captured messages in TLS servers that use RSA key exchanges, which may lead to exposure of confidential or sensitive data.

</blockquote>
</details>

<a href="https://scout.docker.com/v/CVE-2023-0286?s=github&n=cryptography&t=pypi&vr=%3E%3D0.8.1%2C%3C39.0.1"><img alt="high 7.4: CVE--2023--0286" src="https://img.shields.io/badge/CVE--2023--0286-lightgrey?label=high%207.4&labelColor=e25d68"/></a> <i>Access of Resource Using Incompatible Type ('Type Confusion')</i>

<table>
<tr><td>Affected range</td><td><code>>=0.8.1<br/><39.0.1</code></td></tr>
<tr><td>Fixed version</td><td><code>39.0.1</code></td></tr>
<tr><td>CVSS Score</td><td><code>7.4</code></td></tr>
<tr><td>CVSS Vector</td><td><code>CVSS:3.1/AV:N/AC:H/PR:N/UI:N/S:U/C:H/I:N/A:H</code></td></tr>
<tr><td>EPSS Score</td><td><code>85.760%</code></td></tr>
<tr><td>EPSS Percentile</td><td><code>99th percentile</code></td></tr>
</table>

<details><summary>Description</summary>
<blockquote>

pyca/cryptography's wheels include a statically linked copy of OpenSSL. The versions of OpenSSL included in cryptography 0.8.1-39.0.0  are vulnerable to a security issue. More details about the vulnerabilities themselves can be found in https://www.openssl.org/news/secadv/20221213.txt and https://www.openssl.org/news/secadv/20230207.txt.

If you are building cryptography source ("sdist") then you are responsible for upgrading your copy of OpenSSL. Only users installing from wheels built by the cryptography project (i.e., those distributed on PyPI) need to update their cryptography versions.

</blockquote>
</details>

<a href="https://scout.docker.com/v/CVE-2023-23931?s=github&n=cryptography&t=pypi&vr=%3E%3D1.8%2C%3C39.0.1"><img alt="medium 6.9: CVE--2023--23931" src="https://img.shields.io/badge/CVE--2023--23931-lightgrey?label=medium%206.9&labelColor=fbb552"/></a> <i>Improper Check for Unusual or Exceptional Conditions</i>

<table>
<tr><td>Affected range</td><td><code>>=1.8<br/><39.0.1</code></td></tr>
<tr><td>Fixed version</td><td><code>39.0.1</code></td></tr>
<tr><td>CVSS Score</td><td><code>6.9</code></td></tr>
<tr><td>CVSS Vector</td><td><code>CVSS:4.0/AV:N/AC:L/AT:N/PR:N/UI:N/VC:N/VI:L/VA:L/SC:N/SI:N/SA:N</code></td></tr>
<tr><td>EPSS Score</td><td><code>0.331%</code></td></tr>
<tr><td>EPSS Percentile</td><td><code>56th percentile</code></td></tr>
</table>

<details><summary>Description</summary>
<blockquote>

Previously, `Cipher.update_into` would accept Python objects which implement the buffer protocol, but provide only immutable buffers:

```pycon
>>> outbuf = b"\x00" * 32
>>> c = ciphers.Cipher(AES(b"\x00" * 32), modes.ECB()).encryptor()
>>> c.update_into(b"\x00" * 16, outbuf)
16
>>> outbuf
b'\xdc\x95\xc0x\xa2@\x89\x89\xadH\xa2\x14\x92\x84 \x87\x00\x00\x00\x00\x00\x00\x00\x00\x00\x00\x00\x00\x00\x00\x00\x00'
```

This would allow immutable objects (such as `bytes`) to be mutated, thus violating fundamental rules of Python. This is a soundness bug -- it allows programmers to misuse an API, it cannot be exploited by attacker controlled data alone.

This now correctly raises an exception.

This issue has been present since `update_into` was originally introduced in cryptography 1.8.

</blockquote>
</details>

<a href="https://scout.docker.com/v/CVE-2023-49083?s=github&n=cryptography&t=pypi&vr=%3E%3D3.1%2C%3C41.0.6"><img alt="medium 5.9: CVE--2023--49083" src="https://img.shields.io/badge/CVE--2023--49083-lightgrey?label=medium%205.9&labelColor=fbb552"/></a> <i>NULL Pointer Dereference</i>

<table>
<tr><td>Affected range</td><td><code>>=3.1<br/><41.0.6</code></td></tr>
<tr><td>Fixed version</td><td><code>41.0.6</code></td></tr>
<tr><td>CVSS Score</td><td><code>5.9</code></td></tr>
<tr><td>CVSS Vector</td><td><code>CVSS:3.1/AV:N/AC:H/PR:N/UI:N/S:U/C:N/I:N/A:H</code></td></tr>
<tr><td>EPSS Score</td><td><code>0.457%</code></td></tr>
<tr><td>EPSS Percentile</td><td><code>63rd percentile</code></td></tr>
</table>

<details><summary>Description</summary>
<blockquote>

### Summary

Calling `load_pem_pkcs7_certificates` or `load_der_pkcs7_certificates` could lead to a NULL-pointer dereference and segfault.

### PoC
Here is a Python code that triggers the issue:
```python
from cryptography.hazmat.primitives.serialization.pkcs7 import load_der_pkcs7_certificates, load_pem_pkcs7_certificates

pem_p7 = b"""
-----BEGIN PKCS7-----
MAsGCSqGSIb3DQEHAg==
-----END PKCS7-----
"""

der_p7 = b"\x30\x0B\x06\x09\x2A\x86\x48\x86\xF7\x0D\x01\x07\x02"

load_pem_pkcs7_certificates(pem_p7)
load_der_pkcs7_certificates(der_p7)
```

### Impact
Exploitation of this vulnerability poses a serious risk of Denial of Service (DoS) for any application attempting to deserialize a PKCS7 blob/certificate. The consequences extend to potential disruptions in system availability and stability.

</blockquote>
</details>

<a href="https://scout.docker.com/v/CVE-2024-0727?s=github&n=cryptography&t=pypi&vr=%3C42.0.2"><img alt="medium 5.5: CVE--2024--0727" src="https://img.shields.io/badge/CVE--2024--0727-lightgrey?label=medium%205.5&labelColor=fbb552"/></a> <i>NULL Pointer Dereference</i>

<table>
<tr><td>Affected range</td><td><code><42.0.2</code></td></tr>
<tr><td>Fixed version</td><td><code>42.0.2</code></td></tr>
<tr><td>CVSS Score</td><td><code>5.5</code></td></tr>
<tr><td>CVSS Vector</td><td><code>CVSS:3.1/AV:L/AC:L/PR:N/UI:R/S:U/C:N/I:N/A:H</code></td></tr>
<tr><td>EPSS Score</td><td><code>0.103%</code></td></tr>
<tr><td>EPSS Percentile</td><td><code>29th percentile</code></td></tr>
</table>

<details><summary>Description</summary>
<blockquote>

Issue summary: Processing a maliciously formatted PKCS12 file may lead OpenSSL
to crash leading to a potential Denial of Service attack

Impact summary: Applications loading files in the PKCS12 format from untrusted
sources might terminate abruptly.

A file in PKCS12 format can contain certificates and keys and may come from an
untrusted source. The PKCS12 specification allows certain fields to be NULL, but
OpenSSL does not correctly check for this case. This can lead to a NULL pointer
dereference that results in OpenSSL crashing. If an application processes PKCS12
files from an untrusted source using the OpenSSL APIs then that application will
be vulnerable to this issue.

OpenSSL APIs that are vulnerable to this are: PKCS12_parse(),
PKCS12_unpack_p7data(), PKCS12_unpack_p7encdata(), PKCS12_unpack_authsafes()
and PKCS12_newpass().

We have also fixed a similar issue in SMIME_write_PKCS7(). However since this
function is related to writing data we do not consider it security significant.

The FIPS modules in 3.2, 3.1 and 3.0 are not affected by this issue.

</blockquote>
</details>

<a href="https://scout.docker.com/v/GHSA-v8gr-m533-ghj9?s=github&n=cryptography&t=pypi&vr=%3E%3D2.5%2C%3C41.0.4"><img alt="low : GHSA--v8gr--m533--ghj9" src="https://img.shields.io/badge/GHSA--v8gr--m533--ghj9-lightgrey?label=low%20&labelColor=fce1a9"/></a> 

<table>
<tr><td>Affected range</td><td><code>>=2.5<br/><41.0.4</code></td></tr>
<tr><td>Fixed version</td><td><code>41.0.4</code></td></tr>
</table>

<details><summary>Description</summary>
<blockquote>

pyca/cryptography's wheels include a statically linked copy of OpenSSL. The versions of OpenSSL included in cryptography 2.5-41.0.3 are vulnerable to several security issues. More details about the vulnerabilities themselves can be found in https://www.openssl.org/news/secadv/20230908.txt.

If you are building cryptography source ("sdist") then you are responsible for upgrading your copy of OpenSSL. Only users installing from wheels built by the cryptography project (i.e., those distributed on PyPI) need to update their cryptography versions.

</blockquote>
</details>

<a href="https://scout.docker.com/v/GHSA-jm77-qphf-c4w8?s=github&n=cryptography&t=pypi&vr=%3E%3D0.8%2C%3C41.0.3"><img alt="low : GHSA--jm77--qphf--c4w8" src="https://img.shields.io/badge/GHSA--jm77--qphf--c4w8-lightgrey?label=low%20&labelColor=fce1a9"/></a> 

<table>
<tr><td>Affected range</td><td><code>>=0.8<br/><41.0.3</code></td></tr>
<tr><td>Fixed version</td><td><code>41.0.3</code></td></tr>
</table>

<details><summary>Description</summary>
<blockquote>

pyca/cryptography's wheels include a statically linked copy of OpenSSL. The versions of OpenSSL included in cryptography 0.8-41.0.2 are vulnerable to several security issues. More details about the vulnerabilities themselves can be found in https://www.openssl.org/news/secadv/20230731.txt, https://www.openssl.org/news/secadv/20230719.txt, and https://www.openssl.org/news/secadv/20230714.txt.

If you are building cryptography source ("sdist") then you are responsible for upgrading your copy of OpenSSL. Only users installing from wheels built by the cryptography project (i.e., those distributed on PyPI) need to update their cryptography versions.

</blockquote>
</details>

<a href="https://scout.docker.com/v/GHSA-5cpq-8wj7-hf2v?s=github&n=cryptography&t=pypi&vr=%3E%3D0.5%2C%3C%3D40.0.2"><img alt="low : GHSA--5cpq--8wj7--hf2v" src="https://img.shields.io/badge/GHSA--5cpq--8wj7--hf2v-lightgrey?label=low%20&labelColor=fce1a9"/></a> 

<table>
<tr><td>Affected range</td><td><code>>=0.5<br/><=40.0.2</code></td></tr>
<tr><td>Fixed version</td><td><code>41.0.0</code></td></tr>
</table>

<details><summary>Description</summary>
<blockquote>

pyca/cryptography's wheels include a statically linked copy of OpenSSL. The versions of OpenSSL included in cryptography 0.5-40.0.2 are vulnerable to a security issue. More details about the vulnerability itself can be found in https://www.openssl.org/news/secadv/20230530.txt.

If you are building cryptography source ("sdist") then you are responsible for upgrading your copy of OpenSSL. Only users installing from wheels built by the cryptography project (i.e., those distributed on PyPI) need to update their cryptography versions.

</blockquote>
</details>
</details></td></tr>

<tr><td valign="top">
<details><summary><img alt="critical: 0" src="https://img.shields.io/badge/C-0-lightgrey"/> <img alt="high: 1" src="https://img.shields.io/badge/H-1-e25d68"/> <img alt="medium: 0" src="https://img.shields.io/badge/M-0-lightgrey"/> <img alt="low: 0" src="https://img.shields.io/badge/L-0-lightgrey"/> <!-- unspecified: 0 --><strong>pyjwt</strong> <code>2.3.0</code> (pypi)</summary>

<small><code>pkg:pypi/pyjwt@2.3.0</code></small><br/>
<a href="https://scout.docker.com/v/CVE-2022-29217?s=github&n=pyjwt&t=pypi&vr=%3E%3D1.5.0%2C%3C2.4.0"><img alt="high 7.4: CVE--2022--29217" src="https://img.shields.io/badge/CVE--2022--29217-lightgrey?label=high%207.4&labelColor=e25d68"/></a> <i>Use of a Broken or Risky Cryptographic Algorithm</i>

<table>
<tr><td>Affected range</td><td><code>>=1.5.0<br/><2.4.0</code></td></tr>
<tr><td>Fixed version</td><td><code>2.4.0</code></td></tr>
<tr><td>CVSS Score</td><td><code>7.4</code></td></tr>
<tr><td>CVSS Vector</td><td><code>CVSS:3.1/AV:N/AC:H/PR:N/UI:N/S:U/C:H/I:H/A:N</code></td></tr>
<tr><td>EPSS Score</td><td><code>0.418%</code></td></tr>
<tr><td>EPSS Percentile</td><td><code>61st percentile</code></td></tr>
</table>

<details><summary>Description</summary>
<blockquote>

### Impact
_What kind of vulnerability is it? Who is impacted?_

Disclosed by Aapo Oksman (Senior Security Specialist, Nixu Corporation).

> PyJWT supports multiple different JWT signing algorithms. With JWT, an 
> attacker submitting the JWT token can choose the used signing algorithm.
> 
> The PyJWT library requires that the application chooses what algorithms 
> are supported. The application can specify 
> "jwt.algorithms.get_default_algorithms()" to get support for all 
> algorithms. They can also specify a single one of them (which is the 
> usual use case if calling jwt.decode directly. However, if calling 
> jwt.decode in a helper function, all algorithms might be enabled.)
> 
> For example, if the user chooses "none" algorithm and the JWT checker 
> supports that, there will be no signature checking. This is a common 
> security issue with some JWT implementations.
> 
> PyJWT combats this by requiring that the if the "none" algorithm is 
> used, the key has to be empty. As the key is given by the application 
> running the checker, attacker cannot force "none" cipher to be used.
> 
> Similarly with HMAC (symmetric) algorithm, PyJWT checks that the key is 
> not a public key meant for asymmetric algorithm i.e. HMAC cannot be used 
> if the key begins with "ssh-rsa". If HMAC is used with a public key, the 
> attacker can just use the publicly known public key to sign the token 
> and the checker would use the same key to verify.
> 
>  From PyJWT 2.0.0 onwards, PyJWT supports ed25519 asymmetric algorithm. 
> With ed25519, PyJWT supports public keys that start with "ssh-", for 
> example "ssh-ed25519".

```python
import jwt
from cryptography.hazmat.primitives import serialization
from cryptography.hazmat.primitives.asymmetric import ed25519

# Generate ed25519 private key
private_key = ed25519.Ed25519PrivateKey.generate()

# Get private key bytes as they would be stored in a file
priv_key_bytes = 
private_key.private_bytes(encoding=serialization.Encoding.PEM,format=serialization.PrivateFormat.PKCS8, 
encryption_algorithm=serialization.NoEncryption())

# Get public key bytes as they would be stored in a file
pub_key_bytes = 
private_key.public_key().public_bytes(encoding=serialization.Encoding.OpenSSH,format=serialization.PublicFormat.OpenSSH)

# Making a good jwt token that should work by signing it with the 
private key
encoded_good = jwt.encode({"test": 1234}, priv_key_bytes, algorithm="EdDSA")

# Using HMAC with the public key to trick the receiver to think that the 
public key is a HMAC secret
encoded_bad = jwt.encode({"test": 1234}, pub_key_bytes, algorithm="HS256")

# Both of the jwt tokens are validated as valid
decoded_good = jwt.decode(encoded_good, pub_key_bytes, 
algorithms=jwt.algorithms.get_default_algorithms())
decoded_bad = jwt.decode(encoded_bad, pub_key_bytes, 
algorithms=jwt.algorithms.get_default_algorithms())

if decoded_good == decoded_bad:
 ┬á┬á┬á print("POC Successfull")

# Of course the receiver should specify ed25519 algorithm to be used if 
they specify ed25519 public key. However, if other algorithms are used, 
the POC does not work
# HMAC specifies illegal strings for the HMAC secret in jwt/algorithms.py
#
#┬á┬á┬á┬á┬á┬á┬á invalid_strings = [
#┬á┬á┬á┬á┬á┬á┬á┬á┬á┬á┬á b"-----BEGIN PUBLIC KEY-----",
#┬á┬á┬á┬á┬á┬á┬á┬á┬á┬á┬á b"-----BEGIN CERTIFICATE-----",
#┬á┬á┬á┬á┬á┬á┬á┬á┬á┬á┬á b"-----BEGIN RSA PUBLIC KEY-----",
#┬á┬á┬á┬á┬á┬á┬á┬á┬á┬á┬á b"ssh-rsa",
#┬á┬á┬á┬á┬á┬á┬á ]
#
# However, OKPAlgorithm (ed25519) accepts the following in 
jwt/algorithms.py:
#
#┬á┬á┬á┬á┬á┬á┬á┬á┬á┬á┬á┬á┬á┬á┬á if "-----BEGIN PUBLIC" in str_key:
#┬á┬á┬á┬á┬á┬á┬á┬á┬á┬á┬á┬á┬á┬á┬á┬á┬á┬á┬á return load_pem_public_key(key)
#┬á┬á┬á┬á┬á┬á┬á┬á┬á┬á┬á┬á┬á┬á┬á if "-----BEGIN PRIVATE" in str_key:
#┬á┬á┬á┬á┬á┬á┬á┬á┬á┬á┬á┬á┬á┬á┬á┬á┬á┬á┬á return load_pem_private_key(key, password=None)
#┬á┬á┬á┬á┬á┬á┬á┬á┬á┬á┬á┬á┬á┬á┬á if str_key[0:4] == "ssh-":
#┬á┬á┬á┬á┬á┬á┬á┬á┬á┬á┬á┬á┬á┬á┬á┬á┬á┬á┬á return load_ssh_public_key(key)
#
# These should most likely made to match each other to prevent this behavior
```


```python
import jwt

#openssl ecparam -genkey -name prime256v1 -noout -out ec256-key-priv.pem
#openssl ec -in ec256-key-priv.pem -pubout > ec256-key-pub.pem
#ssh-keygen -y -f ec256-key-priv.pem > ec256-key-ssh.pub

priv_key_bytes = b"""-----BEGIN EC PRIVATE KEY-----
MHcCAQEEIOWc7RbaNswMtNtc+n6WZDlUblMr2FBPo79fcGXsJlGQoAoGCCqGSM49
AwEHoUQDQgAElcy2RSSSgn2RA/xCGko79N+7FwoLZr3Z0ij/ENjow2XpUDwwKEKk
Ak3TDXC9U8nipMlGcY7sDpXp2XyhHEM+Rw==
-----END EC PRIVATE KEY-----"""

pub_key_bytes = b"""-----BEGIN PUBLIC KEY-----
MFkwEwYHKoZIzj0CAQYIKoZIzj0DAQcDQgAElcy2RSSSgn2RA/xCGko79N+7FwoL
Zr3Z0ij/ENjow2XpUDwwKEKkAk3TDXC9U8nipMlGcY7sDpXp2XyhHEM+Rw==
-----END PUBLIC KEY-----"""

ssh_key_bytes = b"""ecdsa-sha2-nistp256 AAAAE2VjZHNhLXNoYTItbmlzdHAyNTYAAAAIbmlzdHAyNTYAAABBBJXMtkUkkoJ9kQP8QhpKO/TfuxcKC2a92dIo/xDY6MNl6VA8MChCpAJN0w1wvVPJ4qTJRnGO7A6V6dl8oRxDPkc="""

# Making a good jwt token that should work by signing it with the private key
encoded_good = jwt.encode({"test": 1234}, priv_key_bytes, algorithm="ES256")

# Using HMAC with the ssh public key to trick the receiver to think that the public key is a HMAC secret
encoded_bad = jwt.encode({"test": 1234}, ssh_key_bytes, algorithm="HS256")

# Both of the jwt tokens are validated as valid
decoded_good = jwt.decode(encoded_good, ssh_key_bytes, algorithms=jwt.algorithms.get_default_algorithms())
decoded_bad = jwt.decode(encoded_bad, ssh_key_bytes, algorithms=jwt.algorithms.get_default_algorithms())

if decoded_good == decoded_bad:
    print("POC Successfull")
else:
    print("POC Failed")
```

> The issue is not that big as 
> algorithms=jwt.algorithms.get_default_algorithms() has to be used. 
> However, with quick googling, this seems to be used in some cases at 
> least in some minor projects.

### Patches

Users should upgrade to v2.4.0.

### Workarounds

Always be explicit with the algorithms that are accepted and expected when decoding.

### References
_Are there any links users can visit to find out more?_

### For more information
If you have any questions or comments about this advisory:
* Open an issue in https://github.com/jpadilla/pyjwt
* Email Jos├® Padilla: pyjwt at jpadilla dot com


</blockquote>
</details>
</details></td></tr>

<tr><td valign="top">
<details><summary><img alt="critical: 0" src="https://img.shields.io/badge/C-0-lightgrey"/> <img alt="high: 0" src="https://img.shields.io/badge/H-0-lightgrey"/> <img alt="medium: 3" src="https://img.shields.io/badge/M-3-fbb552"/> <img alt="low: 0" src="https://img.shields.io/badge/L-0-lightgrey"/> <!-- unspecified: 0 --><strong>libde265</strong> <code>1.0.8-1ubuntu0.3</code> (deb)</summary>

<small><code>pkg:deb/ubuntu/libde265@1.0.8-1ubuntu0.3?os_distro=jammy&os_name=ubuntu&os_version=22.04</code></small><br/>
<a href="https://scout.docker.com/v/CVE-2024-38950?s=ubuntu&n=libde265&ns=ubuntu&t=deb&osn=ubuntu&osv=22.04&vr=%3E%3D0"><img alt="medium : CVE--2024--38950" src="https://img.shields.io/badge/CVE--2024--38950-lightgrey?label=medium%20&labelColor=fbb552"/></a> 

<table>
<tr><td>Affected range</td><td><code>>=0</code></td></tr>
<tr><td>Fixed version</td><td><strong>Not Fixed</strong></td></tr>
<tr><td>EPSS Score</td><td><code>0.149%</code></td></tr>
<tr><td>EPSS Percentile</td><td><code>37th percentile</code></td></tr>
</table>

<details><summary>Description</summary>
<blockquote>

Heap Buffer Overflow vulnerability in Libde265 v1.0.15 allows attackers to crash the application via crafted payload to __interceptor_memcpy function.

</blockquote>
</details>

<a href="https://scout.docker.com/v/CVE-2024-38949?s=ubuntu&n=libde265&ns=ubuntu&t=deb&osn=ubuntu&osv=22.04&vr=%3E%3D0"><img alt="medium : CVE--2024--38949" src="https://img.shields.io/badge/CVE--2024--38949-lightgrey?label=medium%20&labelColor=fbb552"/></a> 

<table>
<tr><td>Affected range</td><td><code>>=0</code></td></tr>
<tr><td>Fixed version</td><td><strong>Not Fixed</strong></td></tr>
<tr><td>EPSS Score</td><td><code>0.043%</code></td></tr>
<tr><td>EPSS Percentile</td><td><code>13th percentile</code></td></tr>
</table>

<details><summary>Description</summary>
<blockquote>

Heap Buffer Overflow vulnerability in Libde265 v1.0.15 allows attackers to crash the application via crafted payload to display444as420 function at sdl.cc

</blockquote>
</details>

<a href="https://scout.docker.com/v/CVE-2023-51792?s=ubuntu&n=libde265&ns=ubuntu&t=deb&osn=ubuntu&osv=22.04&vr=%3E%3D0"><img alt="medium : CVE--2023--51792" src="https://img.shields.io/badge/CVE--2023--51792-lightgrey?label=medium%20&labelColor=fbb552"/></a> 

<table>
<tr><td>Affected range</td><td><code>>=0</code></td></tr>
<tr><td>Fixed version</td><td><strong>Not Fixed</strong></td></tr>
<tr><td>EPSS Score</td><td><code>0.032%</code></td></tr>
<tr><td>EPSS Percentile</td><td><code>8th percentile</code></td></tr>
</table>

<details><summary>Description</summary>
<blockquote>

Buffer Overflow vulnerability in libde265 v1.0.12 allows a local attacker to cause a denial of service via the allocation size exceeding the maximum supported size of 0x10000000000.

</blockquote>
</details>
</details></td></tr>

<tr><td valign="top">
<details><summary><img alt="critical: 0" src="https://img.shields.io/badge/C-0-lightgrey"/> <img alt="high: 0" src="https://img.shields.io/badge/H-0-lightgrey"/> <img alt="medium: 2" src="https://img.shields.io/badge/M-2-fbb552"/> <img alt="low: 0" src="https://img.shields.io/badge/L-0-lightgrey"/> <!-- unspecified: 0 --><strong>libheif</strong> <code>1.12.0-2build1</code> (deb)</summary>

<small><code>pkg:deb/ubuntu/libheif@1.12.0-2build1?os_distro=jammy&os_name=ubuntu&os_version=22.04</code></small><br/>
<a href="https://scout.docker.com/v/CVE-2023-0996?s=ubuntu&n=libheif&ns=ubuntu&t=deb&osn=ubuntu&osv=22.04&vr=%3E%3D0"><img alt="medium 7.8: CVE--2023--0996" src="https://img.shields.io/badge/CVE--2023--0996-lightgrey?label=medium%207.8&labelColor=fbb552"/></a> 

<table>
<tr><td>Affected range</td><td><code>>=0</code></td></tr>
<tr><td>Fixed version</td><td><strong>Not Fixed</strong></td></tr>
<tr><td>CVSS Score</td><td><code>7.8</code></td></tr>
<tr><td>CVSS Vector</td><td><code>CVSS:3.1/AV:L/AC:L/PR:N/UI:R/S:U/C:H/I:H/A:H</code></td></tr>
<tr><td>EPSS Score</td><td><code>0.134%</code></td></tr>
<tr><td>EPSS Percentile</td><td><code>35th percentile</code></td></tr>
</table>

<details><summary>Description</summary>
<blockquote>

There is a vulnerability in the strided image data parsing code in the emscripten wrapper for libheif. An attacker could exploit this through a crafted image file to cause a buffer overflow in linear memory during a memcpy call.

</blockquote>
</details>

<a href="https://scout.docker.com/v/CVE-2023-29659?s=ubuntu&n=libheif&ns=ubuntu&t=deb&osn=ubuntu&osv=22.04&vr=%3E%3D0"><img alt="medium 6.5: CVE--2023--29659" src="https://img.shields.io/badge/CVE--2023--29659-lightgrey?label=medium%206.5&labelColor=fbb552"/></a> 

<table>
<tr><td>Affected range</td><td><code>>=0</code></td></tr>
<tr><td>Fixed version</td><td><strong>Not Fixed</strong></td></tr>
<tr><td>CVSS Score</td><td><code>6.5</code></td></tr>
<tr><td>CVSS Vector</td><td><code>CVSS:3.1/AV:N/AC:L/PR:N/UI:R/S:U/C:N/I:N/A:H</code></td></tr>
<tr><td>EPSS Score</td><td><code>0.085%</code></td></tr>
<tr><td>EPSS Percentile</td><td><code>26th percentile</code></td></tr>
</table>

<details><summary>Description</summary>
<blockquote>

A Segmentation fault caused by a floating point exception exists in libheif 1.15.1 using crafted heif images via the heif::Fraction::round() function in box.cc, which causes a denial of service.

</blockquote>
</details>
</details></td></tr>

<tr><td valign="top">
<details><summary><img alt="critical: 0" src="https://img.shields.io/badge/C-0-lightgrey"/> <img alt="high: 0" src="https://img.shields.io/badge/H-0-lightgrey"/> <img alt="medium: 1" src="https://img.shields.io/badge/M-1-fbb552"/> <img alt="low: 1" src="https://img.shields.io/badge/L-1-fce1a9"/> <!-- unspecified: 0 --><strong>glibc</strong> <code>2.35-0ubuntu3.9</code> (deb)</summary>

<small><code>pkg:deb/ubuntu/glibc@2.35-0ubuntu3.9?os_distro=jammy&os_name=ubuntu&os_version=22.04</code></small><br/>
<a href="https://scout.docker.com/v/CVE-2025-4802?s=ubuntu&n=glibc&ns=ubuntu&t=deb&osn=ubuntu&osv=22.04&vr=%3C2.35-0ubuntu3.10"><img alt="medium : CVE--2025--4802" src="https://img.shields.io/badge/CVE--2025--4802-lightgrey?label=medium%20&labelColor=fbb552"/></a> 

<table>
<tr><td>Affected range</td><td><code><2.35-0ubuntu3.10</code></td></tr>
<tr><td>Fixed version</td><td><code>2.35-0ubuntu3.10</code></td></tr>
<tr><td>EPSS Score</td><td><code>0.013%</code></td></tr>
<tr><td>EPSS Percentile</td><td><code>1st percentile</code></td></tr>
</table>

<details><summary>Description</summary>
<blockquote>

Untrusted LD_LIBRARY_PATH environment variable vulnerability in the GNU C Library version 2.27 to 2.38 allows attacker controlled loading of dynamically shared library in statically compiled setuid binaries that call dlopen (including internal dlopen calls after setlocale or calls to NSS functions such as getaddrinfo).

</blockquote>
</details>

<a href="https://scout.docker.com/v/CVE-2016-20013?s=ubuntu&n=glibc&ns=ubuntu&t=deb&osn=ubuntu&osv=22.04&vr=%3E%3D0"><img alt="low 7.5: CVE--2016--20013" src="https://img.shields.io/badge/CVE--2016--20013-lightgrey?label=low%207.5&labelColor=fce1a9"/></a> 

<table>
<tr><td>Affected range</td><td><code>>=0</code></td></tr>
<tr><td>Fixed version</td><td><strong>Not Fixed</strong></td></tr>
<tr><td>CVSS Score</td><td><code>7.5</code></td></tr>
<tr><td>CVSS Vector</td><td><code>CVSS:3.1/AV:N/AC:L/PR:N/UI:N/S:U/C:N/I:N/A:H</code></td></tr>
<tr><td>EPSS Score</td><td><code>0.291%</code></td></tr>
<tr><td>EPSS Percentile</td><td><code>52nd percentile</code></td></tr>
</table>

<details><summary>Description</summary>
<blockquote>

sha256crypt and sha512crypt through 0.6 allow attackers to cause a denial of service (CPU consumption) because the algorithm's runtime is proportional to the square of the length of the password.

</blockquote>
</details>
</details></td></tr>

<tr><td valign="top">
<details><summary><img alt="critical: 0" src="https://img.shields.io/badge/C-0-lightgrey"/> <img alt="high: 0" src="https://img.shields.io/badge/H-0-lightgrey"/> <img alt="medium: 1" src="https://img.shields.io/badge/M-1-fbb552"/> <img alt="low: 0" src="https://img.shields.io/badge/L-0-lightgrey"/> <!-- unspecified: 0 --><strong>krb5</strong> <code>1.19.2-2ubuntu0.6</code> (deb)</summary>

<small><code>pkg:deb/ubuntu/krb5@1.19.2-2ubuntu0.6?os_distro=jammy&os_name=ubuntu&os_version=22.04</code></small><br/>
<a href="https://scout.docker.com/v/CVE-2025-3576?s=ubuntu&n=krb5&ns=ubuntu&t=deb&osn=ubuntu&osv=22.04&vr=%3C1.19.2-2ubuntu0.7"><img alt="medium : CVE--2025--3576" src="https://img.shields.io/badge/CVE--2025--3576-lightgrey?label=medium%20&labelColor=fbb552"/></a> 

<table>
<tr><td>Affected range</td><td><code><1.19.2-2ubuntu0.7</code></td></tr>
<tr><td>Fixed version</td><td><code>1.19.2-2ubuntu0.7</code></td></tr>
<tr><td>EPSS Score</td><td><code>0.014%</code></td></tr>
<tr><td>EPSS Percentile</td><td><code>2nd percentile</code></td></tr>
</table>

<details><summary>Description</summary>
<blockquote>

A vulnerability in the MIT Kerberos implementation allows GSSAPI-protected messages using RC4-HMAC-MD5 to be spoofed due to weaknesses in the MD5 checksum design. If RC4 is preferred over stronger encryption types, an attacker could exploit MD5 collisions to forge message integrity codes. This may lead to unauthorized message tampering.

</blockquote>
</details>
</details></td></tr>

<tr><td valign="top">
<details><summary><img alt="critical: 0" src="https://img.shields.io/badge/C-0-lightgrey"/> <img alt="high: 0" src="https://img.shields.io/badge/H-0-lightgrey"/> <img alt="medium: 1" src="https://img.shields.io/badge/M-1-fbb552"/> <img alt="low: 0" src="https://img.shields.io/badge/L-0-lightgrey"/> <!-- unspecified: 0 --><strong>oauthlib</strong> <code>3.2.0</code> (pypi)</summary>

<small><code>pkg:pypi/oauthlib@3.2.0</code></small><br/>
<a href="https://scout.docker.com/v/CVE-2022-36087?s=github&n=oauthlib&t=pypi&vr=%3E%3D3.1.1%2C%3C3.2.2"><img alt="medium 6.9: CVE--2022--36087" src="https://img.shields.io/badge/CVE--2022--36087-lightgrey?label=medium%206.9&labelColor=fbb552"/></a> <i>Improper Input Validation</i>

<table>
<tr><td>Affected range</td><td><code>>=3.1.1<br/><3.2.2</code></td></tr>
<tr><td>Fixed version</td><td><code>3.2.2</code></td></tr>
<tr><td>CVSS Score</td><td><code>6.9</code></td></tr>
<tr><td>CVSS Vector</td><td><code>CVSS:4.0/AV:N/AC:L/AT:N/PR:L/UI:P/VC:N/VI:N/VA:H/SC:N/SI:N/SA:N</code></td></tr>
<tr><td>EPSS Score</td><td><code>0.315%</code></td></tr>
<tr><td>EPSS Percentile</td><td><code>54th percentile</code></td></tr>
</table>

<details><summary>Description</summary>
<blockquote>

### Impact
- Attacker providing malicious redirect uri can cause DoS to oauthlib's web application.
- Attacker can also leverage usage of `uri_validate` functions depending where it is used.

_What kind of vulnerability is it? Who is impacted?_

Oauthlib applications using OAuth2.0 provider support or use directly `uri_validate` function.

### Patches
_Has the problem been patched? What versions should users upgrade to?_

Issue fixed in 3.2.2 release.

### Workarounds
_Is there a way for users to fix or remediate the vulnerability without upgrading?_

The `redirect_uri` can be verified in web toolkit (i.e `bottle-oauthlib`, `django-oauth-toolkit`, ...) before oauthlib is called. A sample check if `:` is present to reject the request can prevent the DoS, assuming no port or IPv6 is fundamentally required.

### References
Attack Vector:
- Attacker providing malicious redirect uri:
https://github.com/oauthlib/oauthlib/blob/d4bafd9f1d0eba3766e933b1ac598cbbf37b8914/oauthlib/oauth2/rfc6749/grant_types/base.py#L232
- Vulnerable `uri_validate` functions:
https://github.com/oauthlib/oauthlib/blob/2b8a44855a51ad5a5b0c348a08c2564a2e197ea2/oauthlib/uri_validate.py

### PoC
```python
is_absolute_uri("http://[:::::::::::::::::::::::::::::::::::::::]/path")
```

### Acknowledgement
Special thanks to Sebastian Chnelik - PyUp.io

</blockquote>
</details>
</details></td></tr>

<tr><td valign="top">
<details><summary><img alt="critical: 0" src="https://img.shields.io/badge/C-0-lightgrey"/> <img alt="high: 0" src="https://img.shields.io/badge/H-0-lightgrey"/> <img alt="medium: 1" src="https://img.shields.io/badge/M-1-fbb552"/> <img alt="low: 0" src="https://img.shields.io/badge/L-0-lightgrey"/> <!-- unspecified: 0 --><strong>zipp</strong> <code>1.0.0</code> (pypi)</summary>

<small><code>pkg:pypi/zipp@1.0.0</code></small><br/>
<a href="https://scout.docker.com/v/CVE-2024-5569?s=github&n=zipp&t=pypi&vr=%3C3.19.1"><img alt="medium 6.9: CVE--2024--5569" src="https://img.shields.io/badge/CVE--2024--5569-lightgrey?label=medium%206.9&labelColor=fbb552"/></a> <i>Uncontrolled Resource Consumption</i>

<table>
<tr><td>Affected range</td><td><code><3.19.1</code></td></tr>
<tr><td>Fixed version</td><td><code>3.19.1</code></td></tr>
<tr><td>CVSS Score</td><td><code>6.9</code></td></tr>
<tr><td>CVSS Vector</td><td><code>CVSS:4.0/AV:L/AC:L/AT:N/PR:N/UI:N/VC:N/VI:N/VA:H/SC:N/SI:N/SA:N</code></td></tr>
<tr><td>EPSS Score</td><td><code>0.042%</code></td></tr>
<tr><td>EPSS Percentile</td><td><code>12th percentile</code></td></tr>
</table>

<details><summary>Description</summary>
<blockquote>

A Denial of Service (DoS) vulnerability exists in the jaraco/zipp library, affecting all versions prior to 3.19.1. The vulnerability is triggered when processing a specially crafted zip file that leads to an infinite loop. This issue also impacts the zipfile module of CPython, as features from the third-party zipp library are later merged into CPython, and the affected code is identical in both projects. The infinite loop can be initiated through the use of functions affecting the `Path` module in both zipp and zipfile, such as `joinpath`, the overloaded division operator, and `iterdir`. Although the infinite loop is not resource exhaustive, it prevents the application from responding. The vulnerability was addressed in version 3.19.1 of jaraco/zipp.

</blockquote>
</details>
</details></td></tr>

<tr><td valign="top">
<details><summary><img alt="critical: 0" src="https://img.shields.io/badge/C-0-lightgrey"/> <img alt="high: 0" src="https://img.shields.io/badge/H-0-lightgrey"/> <img alt="medium: 1" src="https://img.shields.io/badge/M-1-fbb552"/> <img alt="low: 0" src="https://img.shields.io/badge/L-0-lightgrey"/> <!-- unspecified: 0 --><strong>git</strong> <code>1:2.34.1-1ubuntu1.12</code> (deb)</summary>

<small><code>pkg:deb/ubuntu/git@1%3A2.34.1-1ubuntu1.12?os_distro=jammy&os_name=ubuntu&os_version=22.04</code></small><br/>
<a href="https://scout.docker.com/v/CVE-2024-52005?s=ubuntu&n=git&ns=ubuntu&t=deb&osn=ubuntu&osv=22.04&vr=%3E%3D0"><img alt="medium : CVE--2024--52005" src="https://img.shields.io/badge/CVE--2024--52005-lightgrey?label=medium%20&labelColor=fbb552"/></a> 

<table>
<tr><td>Affected range</td><td><code>>=0</code></td></tr>
<tr><td>Fixed version</td><td><strong>Not Fixed</strong></td></tr>
<tr><td>EPSS Score</td><td><code>0.078%</code></td></tr>
<tr><td>EPSS Percentile</td><td><code>24th percentile</code></td></tr>
</table>

<details><summary>Description</summary>
<blockquote>

Git is a source code management tool. When cloning from a server (or fetching, or pushing), informational or error messages are transported from the remote Git process to the client via the so-called "sideband channel". These messages will be prefixed with "remote:" and printed directly to the standard error output. Typically, this standard error output is connected to a terminal that understands ANSI escape sequences, which Git did not protect against. Most modern terminals support control sequences that can be used by a malicious actor to hide and misrepresent information, or to mislead the user into executing untrusted scripts. As requested on the git-security mailing list, the patches are under discussion on the public mailing list. Users are advised to update as soon as possible. Users unable to upgrade should avoid recursive clones unless they are from trusted sources.

</blockquote>
</details>
</details></td></tr>

<tr><td valign="top">
<details><summary><img alt="critical: 0" src="https://img.shields.io/badge/C-0-lightgrey"/> <img alt="high: 0" src="https://img.shields.io/badge/H-0-lightgrey"/> <img alt="medium: 1" src="https://img.shields.io/badge/M-1-fbb552"/> <img alt="low: 0" src="https://img.shields.io/badge/L-0-lightgrey"/> <!-- unspecified: 0 --><strong>pam</strong> <code>1.4.0-11ubuntu2.5</code> (deb)</summary>

<small><code>pkg:deb/ubuntu/pam@1.4.0-11ubuntu2.5?os_distro=jammy&os_name=ubuntu&os_version=22.04</code></small><br/>
<a href="https://scout.docker.com/v/CVE-2024-10041?s=ubuntu&n=pam&ns=ubuntu&t=deb&osn=ubuntu&osv=22.04&vr=%3E%3D0"><img alt="medium : CVE--2024--10041" src="https://img.shields.io/badge/CVE--2024--10041-lightgrey?label=medium%20&labelColor=fbb552"/></a> 

<table>
<tr><td>Affected range</td><td><code>>=0</code></td></tr>
<tr><td>Fixed version</td><td><strong>Not Fixed</strong></td></tr>
<tr><td>EPSS Score</td><td><code>0.026%</code></td></tr>
<tr><td>EPSS Percentile</td><td><code>6th percentile</code></td></tr>
</table>

<details><summary>Description</summary>
<blockquote>

A vulnerability was found in PAM. The secret information is stored in memory, where the attacker can trigger the victim program to execute by sending characters to its standard input (stdin). As this occurs, the attacker can train the branch predictor to execute an ROP chain speculatively. This flaw could result in leaked passwords, such as those found in /etc/shadow while performing authentications.

</blockquote>
</details>
</details></td></tr>

<tr><td valign="top">
<details><summary><img alt="critical: 0" src="https://img.shields.io/badge/C-0-lightgrey"/> <img alt="high: 0" src="https://img.shields.io/badge/H-0-lightgrey"/> <img alt="medium: 1" src="https://img.shields.io/badge/M-1-fbb552"/> <img alt="low: 0" src="https://img.shields.io/badge/L-0-lightgrey"/> <!-- unspecified: 0 --><strong>wget</strong> <code>1.21.2-2ubuntu1.1</code> (deb)</summary>

<small><code>pkg:deb/ubuntu/wget@1.21.2-2ubuntu1.1?os_distro=jammy&os_name=ubuntu&os_version=22.04</code></small><br/>
<a href="https://scout.docker.com/v/CVE-2021-31879?s=ubuntu&n=wget&ns=ubuntu&t=deb&osn=ubuntu&osv=22.04&vr=%3E%3D0"><img alt="medium 6.1: CVE--2021--31879" src="https://img.shields.io/badge/CVE--2021--31879-lightgrey?label=medium%206.1&labelColor=fbb552"/></a> 

<table>
<tr><td>Affected range</td><td><code>>=0</code></td></tr>
<tr><td>Fixed version</td><td><strong>Not Fixed</strong></td></tr>
<tr><td>CVSS Score</td><td><code>6.1</code></td></tr>
<tr><td>CVSS Vector</td><td><code>CVSS:3.1/AV:N/AC:L/PR:N/UI:R/S:C/C:L/I:L/A:N</code></td></tr>
<tr><td>EPSS Score</td><td><code>0.132%</code></td></tr>
<tr><td>EPSS Percentile</td><td><code>34th percentile</code></td></tr>
</table>

<details><summary>Description</summary>
<blockquote>

GNU Wget through 1.21.1 does not omit the Authorization header upon a redirect to a different origin, a related issue to CVE-2018-1000007.

</blockquote>
</details>
</details></td></tr>

<tr><td valign="top">
<details><summary><img alt="critical: 0" src="https://img.shields.io/badge/C-0-lightgrey"/> <img alt="high: 0" src="https://img.shields.io/badge/H-0-lightgrey"/> <img alt="medium: 1" src="https://img.shields.io/badge/M-1-fbb552"/> <img alt="low: 0" src="https://img.shields.io/badge/L-0-lightgrey"/> <!-- unspecified: 0 --><strong>libbpf</strong> <code>0.5.0-1ubuntu22.04.1</code> (deb)</summary>

<small><code>pkg:deb/ubuntu/libbpf@0.5.0-1ubuntu22.04.1?os_distro=jammy&os_name=ubuntu&os_version=22.04</code></small><br/>
<a href="https://scout.docker.com/v/CVE-2025-29481?s=ubuntu&n=libbpf&ns=ubuntu&t=deb&osn=ubuntu&osv=22.04&vr=%3E%3D0"><img alt="medium : CVE--2025--29481" src="https://img.shields.io/badge/CVE--2025--29481-lightgrey?label=medium%20&labelColor=fbb552"/></a> 

<table>
<tr><td>Affected range</td><td><code>>=0</code></td></tr>
<tr><td>Fixed version</td><td><strong>Not Fixed</strong></td></tr>
<tr><td>EPSS Score</td><td><code>0.022%</code></td></tr>
<tr><td>EPSS Percentile</td><td><code>4th percentile</code></td></tr>
</table>

<details><summary>Description</summary>
<blockquote>

Buffer Overflow vulnerability in libbpf 1.5.0 allows a local attacker to execute arbitrary code via the bpf_object__init_prog` function of libbpf.

</blockquote>
</details>
</details></td></tr>

<tr><td valign="top">
<details><summary><img alt="critical: 0" src="https://img.shields.io/badge/C-0-lightgrey"/> <img alt="high: 0" src="https://img.shields.io/badge/H-0-lightgrey"/> <img alt="medium: 0" src="https://img.shields.io/badge/M-0-lightgrey"/> <img alt="low: 2" src="https://img.shields.io/badge/L-2-fce1a9"/> <!-- unspecified: 0 --><strong>elfutils</strong> <code>0.186-1ubuntu0.1</code> (deb)</summary>

<small><code>pkg:deb/ubuntu/elfutils@0.186-1ubuntu0.1?os_distro=jammy&os_name=ubuntu&os_version=22.04</code></small><br/>
<a href="https://scout.docker.com/v/CVE-2025-1376?s=ubuntu&n=elfutils&ns=ubuntu&t=deb&osn=ubuntu&osv=22.04&vr=%3E%3D0"><img alt="low : CVE--2025--1376" src="https://img.shields.io/badge/CVE--2025--1376-lightgrey?label=low%20&labelColor=fce1a9"/></a> 

<table>
<tr><td>Affected range</td><td><code>>=0</code></td></tr>
<tr><td>Fixed version</td><td><strong>Not Fixed</strong></td></tr>
<tr><td>EPSS Score</td><td><code>0.029%</code></td></tr>
<tr><td>EPSS Percentile</td><td><code>6th percentile</code></td></tr>
</table>

<details><summary>Description</summary>
<blockquote>

A vulnerability classified as problematic was found in GNU elfutils 0.192. This vulnerability affects the function elf_strptr in the library /libelf/elf_strptr.c of the component eu-strip. The manipulation leads to denial of service. It is possible to launch the attack on the local host. The complexity of an attack is rather high. The exploitation appears to be difficult. The exploit has been disclosed to the public and may be used. The name of the patch is b16f441cca0a4841050e3215a9f120a6d8aea918. It is recommended to apply a patch to fix this issue.

</blockquote>
</details>

<a href="https://scout.docker.com/v/CVE-2025-1352?s=ubuntu&n=elfutils&ns=ubuntu&t=deb&osn=ubuntu&osv=22.04&vr=%3E%3D0"><img alt="low : CVE--2025--1352" src="https://img.shields.io/badge/CVE--2025--1352-lightgrey?label=low%20&labelColor=fce1a9"/></a> 

<table>
<tr><td>Affected range</td><td><code>>=0</code></td></tr>
<tr><td>Fixed version</td><td><strong>Not Fixed</strong></td></tr>
<tr><td>EPSS Score</td><td><code>0.100%</code></td></tr>
<tr><td>EPSS Percentile</td><td><code>29th percentile</code></td></tr>
</table>

<details><summary>Description</summary>
<blockquote>

A vulnerability has been found in GNU elfutils 0.192 and classified as critical. This vulnerability affects the function __libdw_thread_tail in the library libdw_alloc.c of the component eu-readelf. The manipulation of the argument w leads to memory corruption. The attack can be initiated remotely. The complexity of an attack is rather high. The exploitation appears to be difficult. The exploit has been disclosed to the public and may be used. The name of the patch is 2636426a091bd6c6f7f02e49ab20d4cdc6bfc753. It is recommended to apply a patch to fix this issue.

</blockquote>
</details>
</details></td></tr>

<tr><td valign="top">
<details><summary><img alt="critical: 0" src="https://img.shields.io/badge/C-0-lightgrey"/> <img alt="high: 0" src="https://img.shields.io/badge/H-0-lightgrey"/> <img alt="medium: 0" src="https://img.shields.io/badge/M-0-lightgrey"/> <img alt="low: 2" src="https://img.shields.io/badge/L-2-fce1a9"/> <!-- unspecified: 0 --><strong>ncurses</strong> <code>6.3-2ubuntu0.1</code> (deb)</summary>

<small><code>pkg:deb/ubuntu/ncurses@6.3-2ubuntu0.1?os_distro=jammy&os_name=ubuntu&os_version=22.04</code></small><br/>
<a href="https://scout.docker.com/v/CVE-2023-50495?s=ubuntu&n=ncurses&ns=ubuntu&t=deb&osn=ubuntu&osv=22.04&vr=%3E%3D0"><img alt="low 6.5: CVE--2023--50495" src="https://img.shields.io/badge/CVE--2023--50495-lightgrey?label=low%206.5&labelColor=fce1a9"/></a> 

<table>
<tr><td>Affected range</td><td><code>>=0</code></td></tr>
<tr><td>Fixed version</td><td><strong>Not Fixed</strong></td></tr>
<tr><td>CVSS Score</td><td><code>6.5</code></td></tr>
<tr><td>CVSS Vector</td><td><code>CVSS:3.1/AV:N/AC:L/PR:N/UI:R/S:U/C:N/I:N/A:H</code></td></tr>
<tr><td>EPSS Score</td><td><code>0.050%</code></td></tr>
<tr><td>EPSS Percentile</td><td><code>15th percentile</code></td></tr>
</table>

<details><summary>Description</summary>
<blockquote>

NCurse v6.4-20230418 was discovered to contain a segmentation fault via the component _nc_wrap_entry().

</blockquote>
</details>

<a href="https://scout.docker.com/v/CVE-2023-45918?s=ubuntu&n=ncurses&ns=ubuntu&t=deb&osn=ubuntu&osv=22.04&vr=%3E%3D0"><img alt="low : CVE--2023--45918" src="https://img.shields.io/badge/CVE--2023--45918-lightgrey?label=low%20&labelColor=fce1a9"/></a> 

<table>
<tr><td>Affected range</td><td><code>>=0</code></td></tr>
<tr><td>Fixed version</td><td><strong>Not Fixed</strong></td></tr>
<tr><td>EPSS Score</td><td><code>0.043%</code></td></tr>
<tr><td>EPSS Percentile</td><td><code>12th percentile</code></td></tr>
</table>

<details><summary>Description</summary>
<blockquote>

ncurses 6.4-20230610 has a NULL pointer dereference in tgetstr in tinfo/lib_termcap.c.

</blockquote>
</details>
</details></td></tr>

<tr><td valign="top">
<details><summary><img alt="critical: 0" src="https://img.shields.io/badge/C-0-lightgrey"/> <img alt="high: 0" src="https://img.shields.io/badge/H-0-lightgrey"/> <img alt="medium: 0" src="https://img.shields.io/badge/M-0-lightgrey"/> <img alt="low: 2" src="https://img.shields.io/badge/L-2-fce1a9"/> <!-- unspecified: 0 --><strong>gcc-12</strong> <code>12.3.0-1ubuntu1~22.04</code> (deb)</summary>

<small><code>pkg:deb/ubuntu/gcc-12@12.3.0-1ubuntu1~22.04?os_distro=jammy&os_name=ubuntu&os_version=22.04</code></small><br/>
<a href="https://scout.docker.com/v/CVE-2022-27943?s=ubuntu&n=gcc-12&ns=ubuntu&t=deb&osn=ubuntu&osv=22.04&vr=%3E%3D0"><img alt="low 5.5: CVE--2022--27943" src="https://img.shields.io/badge/CVE--2022--27943-lightgrey?label=low%205.5&labelColor=fce1a9"/></a> 

<table>
<tr><td>Affected range</td><td><code>>=0</code></td></tr>
<tr><td>Fixed version</td><td><strong>Not Fixed</strong></td></tr>
<tr><td>CVSS Score</td><td><code>5.5</code></td></tr>
<tr><td>CVSS Vector</td><td><code>CVSS:3.1/AV:L/AC:L/PR:N/UI:R/S:U/C:N/I:N/A:H</code></td></tr>
<tr><td>EPSS Score</td><td><code>0.044%</code></td></tr>
<tr><td>EPSS Percentile</td><td><code>13th percentile</code></td></tr>
</table>

<details><summary>Description</summary>
<blockquote>

libiberty/rust-demangle.c in GNU GCC 11.2 allows stack consumption in demangle_const, as demonstrated by nm-new.

</blockquote>
</details>

<a href="https://scout.docker.com/v/CVE-2023-4039?s=ubuntu&n=gcc-12&ns=ubuntu&t=deb&osn=ubuntu&osv=22.04&vr=%3E%3D0"><img alt="low 4.8: CVE--2023--4039" src="https://img.shields.io/badge/CVE--2023--4039-lightgrey?label=low%204.8&labelColor=fce1a9"/></a> 

<table>
<tr><td>Affected range</td><td><code>>=0</code></td></tr>
<tr><td>Fixed version</td><td><strong>Not Fixed</strong></td></tr>
<tr><td>CVSS Score</td><td><code>4.8</code></td></tr>
<tr><td>CVSS Vector</td><td><code>CVSS:3.1/AV:N/AC:H/PR:N/UI:N/S:U/C:L/I:L/A:N</code></td></tr>
<tr><td>EPSS Score</td><td><code>0.121%</code></td></tr>
<tr><td>EPSS Percentile</td><td><code>32nd percentile</code></td></tr>
</table>

<details><summary>Description</summary>
<blockquote>

**DISPUTED**A failure in the -fstack-protector feature in GCC-based toolchains that target AArch64 allows an attacker to exploit an existing buffer overflow in dynamically-sized local variables in your application without this being detected. This stack-protector failure only applies to C99-style dynamically-sized local variables or those created using alloca(). The stack-protector operates as intended for statically-sized local variables. The default behavior when the stack-protector detects an overflow is to terminate your application, resulting in controlled loss of availability. An attacker who can exploit a buffer overflow without triggering the stack-protector might be able to change program flow control to cause an uncontrolled loss of availability or to go further and affect confidentiality or integrity. NOTE: The GCC project argues that this is a missed hardening bug and not a vulnerability by itself.

</blockquote>
</details>
</details></td></tr>

<tr><td valign="top">
<details><summary><img alt="critical: 0" src="https://img.shields.io/badge/C-0-lightgrey"/> <img alt="high: 0" src="https://img.shields.io/badge/H-0-lightgrey"/> <img alt="medium: 0" src="https://img.shields.io/badge/M-0-lightgrey"/> <img alt="low: 2" src="https://img.shields.io/badge/L-2-fce1a9"/> <!-- unspecified: 0 --><strong>shadow</strong> <code>1:4.8.1-2ubuntu2.2</code> (deb)</summary>

<small><code>pkg:deb/ubuntu/shadow@1%3A4.8.1-2ubuntu2.2?os_distro=jammy&os_name=ubuntu&os_version=22.04</code></small><br/>
<a href="https://scout.docker.com/v/CVE-2023-29383?s=ubuntu&n=shadow&ns=ubuntu&t=deb&osn=ubuntu&osv=22.04&vr=%3E%3D0"><img alt="low 3.3: CVE--2023--29383" src="https://img.shields.io/badge/CVE--2023--29383-lightgrey?label=low%203.3&labelColor=fce1a9"/></a> 

<table>
<tr><td>Affected range</td><td><code>>=0</code></td></tr>
<tr><td>Fixed version</td><td><strong>Not Fixed</strong></td></tr>
<tr><td>CVSS Score</td><td><code>3.3</code></td></tr>
<tr><td>CVSS Vector</td><td><code>CVSS:3.1/AV:L/AC:L/PR:L/UI:N/S:U/C:N/I:L/A:N</code></td></tr>
<tr><td>EPSS Score</td><td><code>0.026%</code></td></tr>
<tr><td>EPSS Percentile</td><td><code>6th percentile</code></td></tr>
</table>

<details><summary>Description</summary>
<blockquote>

In Shadow 4.13, it is possible to inject control characters into fields provided to the SUID program chfn (change finger). Although it is not possible to exploit this directly (e.g., adding a new user fails because \n is in the block list), it is possible to misrepresent the /etc/passwd file when viewed. Use of \r manipulations and Unicode characters to work around blocking of the : character make it possible to give the impression that a new user has been added. In other words, an adversary may be able to convince a system administrator to take the system offline (an indirect, social-engineered denial of service) by demonstrating that "cat /etc/passwd" shows a rogue user account.

</blockquote>
</details>

<a href="https://scout.docker.com/v/CVE-2024-56433?s=ubuntu&n=shadow&ns=ubuntu&t=deb&osn=ubuntu&osv=22.04&vr=%3E%3D0"><img alt="low : CVE--2024--56433" src="https://img.shields.io/badge/CVE--2024--56433-lightgrey?label=low%20&labelColor=fce1a9"/></a> 

<table>
<tr><td>Affected range</td><td><code>>=0</code></td></tr>
<tr><td>Fixed version</td><td><strong>Not Fixed</strong></td></tr>
<tr><td>EPSS Score</td><td><code>2.872%</code></td></tr>
<tr><td>EPSS Percentile</td><td><code>86th percentile</code></td></tr>
</table>

<details><summary>Description</summary>
<blockquote>

shadow-utils (aka shadow) 4.4 through 4.17.0 establishes a default /etc/subuid behavior (e.g., uid 100000 through 165535 for the first user account) that can realistically conflict with the uids of users defined on locally administered networks, potentially leading to account takeover, e.g., by leveraging newuidmap for access to an NFS home directory (or same-host resources in the case of remote logins by these local network users). NOTE: it may also be argued that system administrators should not have assigned uids, within local networks, that are within the range that can occur in /etc/subuid.

</blockquote>
</details>
</details></td></tr>

<tr><td valign="top">
<details><summary><img alt="critical: 0" src="https://img.shields.io/badge/C-0-lightgrey"/> <img alt="high: 0" src="https://img.shields.io/badge/H-0-lightgrey"/> <img alt="medium: 0" src="https://img.shields.io/badge/M-0-lightgrey"/> <img alt="low: 1" src="https://img.shields.io/badge/L-1-fce1a9"/> <!-- unspecified: 0 --><strong>curl</strong> <code>7.81.0-1ubuntu1.20</code> (deb)</summary>

<small><code>pkg:deb/ubuntu/curl@7.81.0-1ubuntu1.20?os_distro=jammy&os_name=ubuntu&os_version=22.04</code></small><br/>
<a href="https://scout.docker.com/v/CVE-2025-0167?s=ubuntu&n=curl&ns=ubuntu&t=deb&osn=ubuntu&osv=22.04&vr=%3E%3D0"><img alt="low : CVE--2025--0167" src="https://img.shields.io/badge/CVE--2025--0167-lightgrey?label=low%20&labelColor=fce1a9"/></a> 

<table>
<tr><td>Affected range</td><td><code>>=0</code></td></tr>
<tr><td>Fixed version</td><td><strong>Not Fixed</strong></td></tr>
<tr><td>EPSS Score</td><td><code>0.066%</code></td></tr>
<tr><td>EPSS Percentile</td><td><code>21st percentile</code></td></tr>
</table>

<details><summary>Description</summary>
<blockquote>

When asked to use a `.netrc` file for credentials **and** to follow HTTP redirects, curl could leak the password used for the first host to the followed-to host under certain circumstances.  This flaw only manifests itself if the netrc file has a `default` entry that omits both login and password. A rare circumstance.

</blockquote>
</details>
</details></td></tr>

<tr><td valign="top">
<details><summary><img alt="critical: 0" src="https://img.shields.io/badge/C-0-lightgrey"/> <img alt="high: 0" src="https://img.shields.io/badge/H-0-lightgrey"/> <img alt="medium: 0" src="https://img.shields.io/badge/M-0-lightgrey"/> <img alt="low: 1" src="https://img.shields.io/badge/L-1-fce1a9"/> <!-- unspecified: 0 --><strong>libpng1.6</strong> <code>1.6.37-3build5</code> (deb)</summary>

<small><code>pkg:deb/ubuntu/libpng1.6@1.6.37-3build5?os_distro=jammy&os_name=ubuntu&os_version=22.04</code></small><br/>
<a href="https://scout.docker.com/v/CVE-2022-3857?s=ubuntu&n=libpng1.6&ns=ubuntu&t=deb&osn=ubuntu&osv=22.04&vr=%3E%3D0"><img alt="low 5.5: CVE--2022--3857" src="https://img.shields.io/badge/CVE--2022--3857-lightgrey?label=low%205.5&labelColor=fce1a9"/></a> 

<table>
<tr><td>Affected range</td><td><code>>=0</code></td></tr>
<tr><td>Fixed version</td><td><strong>Not Fixed</strong></td></tr>
<tr><td>CVSS Score</td><td><code>5.5</code></td></tr>
<tr><td>CVSS Vector</td><td><code>CVSS:3.1/AV:L/AC:L/PR:N/UI:R/S:U/C:N/I:N/A:H</code></td></tr>
<tr><td>EPSS Score</td><td><code>0.044%</code></td></tr>
<tr><td>EPSS Percentile</td><td><code>15th percentile</code></td></tr>
</table>

<details><summary>Description</summary>
<blockquote>

A flaw was found in libpng 1.6.38. A crafted PNG image can lead to a segmentation fault and denial of service in png_setup_paeth_row() function.

</blockquote>
</details>
</details></td></tr>

<tr><td valign="top">
<details><summary><img alt="critical: 0" src="https://img.shields.io/badge/C-0-lightgrey"/> <img alt="high: 0" src="https://img.shields.io/badge/H-0-lightgrey"/> <img alt="medium: 0" src="https://img.shields.io/badge/M-0-lightgrey"/> <img alt="low: 1" src="https://img.shields.io/badge/L-1-fce1a9"/> <!-- unspecified: 0 --><strong>icu</strong> <code>70.1-2</code> (deb)</summary>

<small><code>pkg:deb/ubuntu/icu@70.1-2?os_distro=jammy&os_name=ubuntu&os_version=22.04</code></small><br/>
<a href="https://scout.docker.com/v/CVE-2025-5222?s=ubuntu&n=icu&ns=ubuntu&t=deb&osn=ubuntu&osv=22.04&vr=%3E%3D0"><img alt="low : CVE--2025--5222" src="https://img.shields.io/badge/CVE--2025--5222-lightgrey?label=low%20&labelColor=fce1a9"/></a> 

<table>
<tr><td>Affected range</td><td><code>>=0</code></td></tr>
<tr><td>Fixed version</td><td><strong>Not Fixed</strong></td></tr>
<tr><td>EPSS Score</td><td><code>0.015%</code></td></tr>
<tr><td>EPSS Percentile</td><td><code>2nd percentile</code></td></tr>
</table>

<details><summary>Description</summary>
<blockquote>

A stack buffer overflow was found in Internationl components for unicode (ICU ). While running the genrb binary, the 'subtag' struct overflowed at the SRBRoot::addTag function. This issue may lead to memory corruption and local arbitrary code execution.

</blockquote>
</details>
</details></td></tr>

<tr><td valign="top">
<details><summary><img alt="critical: 0" src="https://img.shields.io/badge/C-0-lightgrey"/> <img alt="high: 0" src="https://img.shields.io/badge/H-0-lightgrey"/> <img alt="medium: 0" src="https://img.shields.io/badge/M-0-lightgrey"/> <img alt="low: 1" src="https://img.shields.io/badge/L-1-fce1a9"/> <!-- unspecified: 0 --><strong>pcre2</strong> <code>10.39-3ubuntu0.1</code> (deb)</summary>

<small><code>pkg:deb/ubuntu/pcre2@10.39-3ubuntu0.1?os_distro=jammy&os_name=ubuntu&os_version=22.04</code></small><br/>
<a href="https://scout.docker.com/v/CVE-2022-41409?s=ubuntu&n=pcre2&ns=ubuntu&t=deb&osn=ubuntu&osv=22.04&vr=%3E%3D0"><img alt="low 7.5: CVE--2022--41409" src="https://img.shields.io/badge/CVE--2022--41409-lightgrey?label=low%207.5&labelColor=fce1a9"/></a> 

<table>
<tr><td>Affected range</td><td><code>>=0</code></td></tr>
<tr><td>Fixed version</td><td><strong>Not Fixed</strong></td></tr>
<tr><td>CVSS Score</td><td><code>7.5</code></td></tr>
<tr><td>CVSS Vector</td><td><code>CVSS:3.1/AV:N/AC:L/PR:N/UI:N/S:U/C:N/I:N/A:H</code></td></tr>
<tr><td>EPSS Score</td><td><code>0.046%</code></td></tr>
<tr><td>EPSS Percentile</td><td><code>14th percentile</code></td></tr>
</table>

<details><summary>Description</summary>
<blockquote>

Integer overflow vulnerability in pcre2test before 10.41 allows attackers to cause a denial of service or other unspecified impacts via negative input.

</blockquote>
</details>
</details></td></tr>

<tr><td valign="top">
<details><summary><img alt="critical: 0" src="https://img.shields.io/badge/C-0-lightgrey"/> <img alt="high: 0" src="https://img.shields.io/badge/H-0-lightgrey"/> <img alt="medium: 0" src="https://img.shields.io/badge/M-0-lightgrey"/> <img alt="low: 1" src="https://img.shields.io/badge/L-1-fce1a9"/> <!-- unspecified: 0 --><strong>policykit-1</strong> <code>0.105-33</code> (deb)</summary>

<small><code>pkg:deb/ubuntu/policykit-1@0.105-33?os_distro=jammy&os_name=ubuntu&os_version=22.04</code></small><br/>
<a href="https://scout.docker.com/v/CVE-2016-2568?s=ubuntu&n=policykit-1&ns=ubuntu&t=deb&osn=ubuntu&osv=22.04&vr=%3E%3D0"><img alt="low 7.8: CVE--2016--2568" src="https://img.shields.io/badge/CVE--2016--2568-lightgrey?label=low%207.8&labelColor=fce1a9"/></a> 

<table>
<tr><td>Affected range</td><td><code>>=0</code></td></tr>
<tr><td>Fixed version</td><td><strong>Not Fixed</strong></td></tr>
<tr><td>CVSS Score</td><td><code>7.8</code></td></tr>
<tr><td>CVSS Vector</td><td><code>CVSS:3.1/AV:L/AC:H/PR:L/UI:N/S:C/C:H/I:H/A:H</code></td></tr>
<tr><td>EPSS Score</td><td><code>0.124%</code></td></tr>
<tr><td>EPSS Percentile</td><td><code>33rd percentile</code></td></tr>
</table>

<details><summary>Description</summary>
<blockquote>

pkexec, when used with --user nonpriv, allows local users to escape to the parent session via a crafted TIOCSTI ioctl call, which pushes characters to the terminal's input buffer.

</blockquote>
</details>
</details></td></tr>

<tr><td valign="top">
<details><summary><img alt="critical: 0" src="https://img.shields.io/badge/C-0-lightgrey"/> <img alt="high: 0" src="https://img.shields.io/badge/H-0-lightgrey"/> <img alt="medium: 0" src="https://img.shields.io/badge/M-0-lightgrey"/> <img alt="low: 1" src="https://img.shields.io/badge/L-1-fce1a9"/> <!-- unspecified: 0 --><strong>openssl</strong> <code>3.0.2-0ubuntu1.19</code> (deb)</summary>

<small><code>pkg:deb/ubuntu/openssl@3.0.2-0ubuntu1.19?os_distro=jammy&os_name=ubuntu&os_version=22.04</code></small><br/>
<a href="https://scout.docker.com/v/CVE-2024-41996?s=ubuntu&n=openssl&ns=ubuntu&t=deb&osn=ubuntu&osv=22.04&vr=%3E%3D0"><img alt="low : CVE--2024--41996" src="https://img.shields.io/badge/CVE--2024--41996-lightgrey?label=low%20&labelColor=fce1a9"/></a> 

<table>
<tr><td>Affected range</td><td><code>>=0</code></td></tr>
<tr><td>Fixed version</td><td><strong>Not Fixed</strong></td></tr>
<tr><td>EPSS Score</td><td><code>0.157%</code></td></tr>
<tr><td>EPSS Percentile</td><td><code>38th percentile</code></td></tr>
</table>

<details><summary>Description</summary>
<blockquote>

Validating the order of the public keys in the Diffie-Hellman Key Agreement Protocol, when an approved safe prime is used, allows remote attackers (from the client side) to trigger unnecessarily expensive server-side DHE modular-exponentiation calculations. The client may cause asymmetric resource consumption. The basic attack scenario is that the client must claim that it can only communicate with DHE, and the server must be configured to allow DHE and validate the order of the public key.

</blockquote>
</details>
</details></td></tr>

<tr><td valign="top">
<details><summary><img alt="critical: 0" src="https://img.shields.io/badge/C-0-lightgrey"/> <img alt="high: 0" src="https://img.shields.io/badge/H-0-lightgrey"/> <img alt="medium: 0" src="https://img.shields.io/badge/M-0-lightgrey"/> <img alt="low: 1" src="https://img.shields.io/badge/L-1-fce1a9"/> <!-- unspecified: 0 --><strong>gnupg2</strong> <code>2.2.27-3ubuntu2.3</code> (deb)</summary>

<small><code>pkg:deb/ubuntu/gnupg2@2.2.27-3ubuntu2.3?os_distro=jammy&os_name=ubuntu&os_version=22.04</code></small><br/>
<a href="https://scout.docker.com/v/CVE-2022-3219?s=ubuntu&n=gnupg2&ns=ubuntu&t=deb&osn=ubuntu&osv=22.04&vr=%3E%3D0"><img alt="low 3.3: CVE--2022--3219" src="https://img.shields.io/badge/CVE--2022--3219-lightgrey?label=low%203.3&labelColor=fce1a9"/></a> 

<table>
<tr><td>Affected range</td><td><code>>=0</code></td></tr>
<tr><td>Fixed version</td><td><strong>Not Fixed</strong></td></tr>
<tr><td>CVSS Score</td><td><code>3.3</code></td></tr>
<tr><td>CVSS Vector</td><td><code>CVSS:3.1/AV:L/AC:L/PR:L/UI:N/S:U/C:N/I:N/A:L</code></td></tr>
<tr><td>EPSS Score</td><td><code>0.012%</code></td></tr>
<tr><td>EPSS Percentile</td><td><code>1st percentile</code></td></tr>
</table>

<details><summary>Description</summary>
<blockquote>

GnuPG can be made to spin on a relatively small input by (for example) crafting a public key with thousands of signatures attached, compressed down to just a few KB.

</blockquote>
</details>
</details></td></tr>

<tr><td valign="top">
<details><summary><img alt="critical: 0" src="https://img.shields.io/badge/C-0-lightgrey"/> <img alt="high: 0" src="https://img.shields.io/badge/H-0-lightgrey"/> <img alt="medium: 0" src="https://img.shields.io/badge/M-0-lightgrey"/> <img alt="low: 1" src="https://img.shields.io/badge/L-1-fce1a9"/> <!-- unspecified: 0 --><strong>dbus</strong> <code>1.12.20-2ubuntu4.1</code> (deb)</summary>

<small><code>pkg:deb/ubuntu/dbus@1.12.20-2ubuntu4.1?os_distro=jammy&os_name=ubuntu&os_version=22.04</code></small><br/>
<a href="https://scout.docker.com/v/CVE-2023-34969?s=ubuntu&n=dbus&ns=ubuntu&t=deb&osn=ubuntu&osv=22.04&vr=%3E%3D0"><img alt="low 6.5: CVE--2023--34969" src="https://img.shields.io/badge/CVE--2023--34969-lightgrey?label=low%206.5&labelColor=fce1a9"/></a> 

<table>
<tr><td>Affected range</td><td><code>>=0</code></td></tr>
<tr><td>Fixed version</td><td><strong>Not Fixed</strong></td></tr>
<tr><td>CVSS Score</td><td><code>6.5</code></td></tr>
<tr><td>CVSS Vector</td><td><code>CVSS:3.1/AV:N/AC:L/PR:L/UI:N/S:U/C:N/I:N/A:H</code></td></tr>
<tr><td>EPSS Score</td><td><code>0.421%</code></td></tr>
<tr><td>EPSS Percentile</td><td><code>61st percentile</code></td></tr>
</table>

<details><summary>Description</summary>
<blockquote>

D-Bus before 1.15.6 sometimes allows unprivileged users to crash dbus-daemon. If a privileged user with control over the dbus-daemon is using the org.freedesktop.DBus.Monitoring interface to monitor message bus traffic, then an unprivileged user with the ability to connect to the same dbus-daemon can cause a dbus-daemon crash under some circumstances via an unreplyable message. When done on the well-known system bus, this is a denial-of-service vulnerability. The fixed versions are 1.12.28, 1.14.8, and 1.15.6.

</blockquote>
</details>
</details></td></tr>

<tr><td valign="top">
<details><summary><img alt="critical: 0" src="https://img.shields.io/badge/C-0-lightgrey"/> <img alt="high: 0" src="https://img.shields.io/badge/H-0-lightgrey"/> <img alt="medium: 0" src="https://img.shields.io/badge/M-0-lightgrey"/> <img alt="low: 1" src="https://img.shields.io/badge/L-1-fce1a9"/> <!-- unspecified: 0 --><strong>python-httplib2</strong> <code>0.20.2-2</code> (deb)</summary>

<small><code>pkg:deb/ubuntu/python-httplib2@0.20.2-2?os_distro=jammy&os_name=ubuntu&os_version=22.04</code></small><br/>
<a href="https://scout.docker.com/v/CVE-2021-21240?s=ubuntu&n=python-httplib2&ns=ubuntu&t=deb&osn=ubuntu&osv=22.04&vr=%3E%3D0"><img alt="low 7.5: CVE--2021--21240" src="https://img.shields.io/badge/CVE--2021--21240-lightgrey?label=low%207.5&labelColor=fce1a9"/></a> 

<table>
<tr><td>Affected range</td><td><code>>=0</code></td></tr>
<tr><td>Fixed version</td><td><strong>Not Fixed</strong></td></tr>
<tr><td>CVSS Score</td><td><code>7.5</code></td></tr>
<tr><td>CVSS Vector</td><td><code>CVSS:3.1/AV:N/AC:L/PR:N/UI:N/S:U/C:N/I:N/A:H</code></td></tr>
<tr><td>EPSS Score</td><td><code>1.371%</code></td></tr>
<tr><td>EPSS Percentile</td><td><code>79th percentile</code></td></tr>
</table>

<details><summary>Description</summary>
<blockquote>

httplib2 is a comprehensive HTTP client library for Python. In httplib2 before version 0.19.0, a malicious server which responds with long series of "\xa0" characters in the "www-authenticate" header may cause Denial of Service (CPU burn while parsing header) of the httplib2 client accessing said server. This is fixed in version 0.19.0 which contains a new implementation of auth headers parsing using the pyparsing library.

</blockquote>
</details>
</details></td></tr>

<tr><td valign="top">
<details><summary><img alt="critical: 0" src="https://img.shields.io/badge/C-0-lightgrey"/> <img alt="high: 0" src="https://img.shields.io/badge/H-0-lightgrey"/> <img alt="medium: 0" src="https://img.shields.io/badge/M-0-lightgrey"/> <img alt="low: 1" src="https://img.shields.io/badge/L-1-fce1a9"/> <!-- unspecified: 0 --><strong>tiff</strong> <code>4.3.0-6ubuntu0.10</code> (deb)</summary>

<small><code>pkg:deb/ubuntu/tiff@4.3.0-6ubuntu0.10?os_distro=jammy&os_name=ubuntu&os_version=22.04</code></small><br/>
<a href="https://scout.docker.com/v/CVE-2024-6716?s=ubuntu&n=tiff&ns=ubuntu&t=deb&osn=ubuntu&osv=22.04&vr=%3E%3D0"><img alt="low : CVE--2024--6716" src="https://img.shields.io/badge/CVE--2024--6716-lightgrey?label=low%20&labelColor=fce1a9"/></a> 

<table>
<tr><td>Affected range</td><td><code>>=0</code></td></tr>
<tr><td>Fixed version</td><td><strong>Not Fixed</strong></td></tr>
<tr><td>EPSS Score</td><td><code>0.043%</code></td></tr>
<tr><td>EPSS Percentile</td><td><code>12th percentile</code></td></tr>
</table>

<details><summary>Description</summary>
<blockquote>

Rejected reason: Invalid security issue.

</blockquote>
</details>
</details></td></tr>

<tr><td valign="top">
<details><summary><img alt="critical: 0" src="https://img.shields.io/badge/C-0-lightgrey"/> <img alt="high: 0" src="https://img.shields.io/badge/H-0-lightgrey"/> <img alt="medium: 0" src="https://img.shields.io/badge/M-0-lightgrey"/> <img alt="low: 1" src="https://img.shields.io/badge/L-1-fce1a9"/> <!-- unspecified: 0 --><strong>libgcrypt20</strong> <code>1.9.4-3ubuntu3</code> (deb)</summary>

<small><code>pkg:deb/ubuntu/libgcrypt20@1.9.4-3ubuntu3?os_distro=jammy&os_name=ubuntu&os_version=22.04</code></small><br/>
<a href="https://scout.docker.com/v/CVE-2024-2236?s=ubuntu&n=libgcrypt20&ns=ubuntu&t=deb&osn=ubuntu&osv=22.04&vr=%3E%3D0"><img alt="low : CVE--2024--2236" src="https://img.shields.io/badge/CVE--2024--2236-lightgrey?label=low%20&labelColor=fce1a9"/></a> 

<table>
<tr><td>Affected range</td><td><code>>=0</code></td></tr>
<tr><td>Fixed version</td><td><strong>Not Fixed</strong></td></tr>
<tr><td>EPSS Score</td><td><code>0.228%</code></td></tr>
<tr><td>EPSS Percentile</td><td><code>46th percentile</code></td></tr>
</table>

<details><summary>Description</summary>
<blockquote>

A timing-based side-channel flaw was found in libgcrypt's RSA implementation. This issue may allow a remote attacker to initiate a Bleichenbacher-style attack, which can lead to the decryption of RSA ciphertexts.

</blockquote>
</details>
</details></td></tr>

<tr><td valign="top">
<details><summary><img alt="critical: 0" src="https://img.shields.io/badge/C-0-lightgrey"/> <img alt="high: 0" src="https://img.shields.io/badge/H-0-lightgrey"/> <img alt="medium: 0" src="https://img.shields.io/badge/M-0-lightgrey"/> <img alt="low: 1" src="https://img.shields.io/badge/L-1-fce1a9"/> <!-- unspecified: 0 --><strong>pcre3</strong> <code>2:8.39-13ubuntu0.22.04.1</code> (deb)</summary>

<small><code>pkg:deb/ubuntu/pcre3@2%3A8.39-13ubuntu0.22.04.1?os_distro=jammy&os_name=ubuntu&os_version=22.04</code></small><br/>
<a href="https://scout.docker.com/v/CVE-2017-11164?s=ubuntu&n=pcre3&ns=ubuntu&t=deb&osn=ubuntu&osv=22.04&vr=%3E%3D0"><img alt="low 7.5: CVE--2017--11164" src="https://img.shields.io/badge/CVE--2017--11164-lightgrey?label=low%207.5&labelColor=fce1a9"/></a> 

<table>
<tr><td>Affected range</td><td><code>>=0</code></td></tr>
<tr><td>Fixed version</td><td><strong>Not Fixed</strong></td></tr>
<tr><td>CVSS Score</td><td><code>7.5</code></td></tr>
<tr><td>CVSS Vector</td><td><code>CVSS:3.0/AV:N/AC:L/PR:N/UI:N/S:U/C:N/I:N/A:H</code></td></tr>
<tr><td>EPSS Score</td><td><code>0.364%</code></td></tr>
<tr><td>EPSS Percentile</td><td><code>58th percentile</code></td></tr>
</table>

<details><summary>Description</summary>
<blockquote>

In PCRE 8.41, the OP_KETRMAX feature in the match function in pcre_exec.c allows stack exhaustion (uncontrolled recursion) when processing a crafted regular expression.

</blockquote>
</details>
</details></td></tr>

<tr><td valign="top">
<details><summary><img alt="critical: 0" src="https://img.shields.io/badge/C-0-lightgrey"/> <img alt="high: 0" src="https://img.shields.io/badge/H-0-lightgrey"/> <img alt="medium: 0" src="https://img.shields.io/badge/M-0-lightgrey"/> <img alt="low: 1" src="https://img.shields.io/badge/L-1-fce1a9"/> <!-- unspecified: 0 --><strong>coreutils</strong> <code>8.32-4.1ubuntu1.2</code> (deb)</summary>

<small><code>pkg:deb/ubuntu/coreutils@8.32-4.1ubuntu1.2?os_distro=jammy&os_name=ubuntu&os_version=22.04</code></small><br/>
<a href="https://scout.docker.com/v/CVE-2016-2781?s=ubuntu&n=coreutils&ns=ubuntu&t=deb&osn=ubuntu&osv=22.04&vr=%3E%3D0"><img alt="low 6.5: CVE--2016--2781" src="https://img.shields.io/badge/CVE--2016--2781-lightgrey?label=low%206.5&labelColor=fce1a9"/></a> 

<table>
<tr><td>Affected range</td><td><code>>=0</code></td></tr>
<tr><td>Fixed version</td><td><strong>Not Fixed</strong></td></tr>
<tr><td>CVSS Score</td><td><code>6.5</code></td></tr>
<tr><td>CVSS Vector</td><td><code>CVSS:3.0/AV:L/AC:L/PR:L/UI:N/S:C/C:N/I:H/A:N</code></td></tr>
<tr><td>EPSS Score</td><td><code>0.065%</code></td></tr>
<tr><td>EPSS Percentile</td><td><code>21st percentile</code></td></tr>
</table>

<details><summary>Description</summary>
<blockquote>

chroot in GNU coreutils, when used with --userspec, allows local users to escape to the parent session via a crafted TIOCSTI ioctl call, which pushes characters to the terminal's input buffer.

</blockquote>
</details>
</details></td></tr>

<tr><td valign="top">
<details><summary><img alt="critical: 0" src="https://img.shields.io/badge/C-0-lightgrey"/> <img alt="high: 0" src="https://img.shields.io/badge/H-0-lightgrey"/> <img alt="medium: 0" src="https://img.shields.io/badge/M-0-lightgrey"/> <img alt="low: 1" src="https://img.shields.io/badge/L-1-fce1a9"/> <!-- unspecified: 0 --><strong>systemd</strong> <code>249.11-0ubuntu3.15</code> (deb)</summary>

<small><code>pkg:deb/ubuntu/systemd@249.11-0ubuntu3.15?os_distro=jammy&os_name=ubuntu&os_version=22.04</code></small><br/>
<a href="https://scout.docker.com/v/CVE-2023-7008?s=ubuntu&n=systemd&ns=ubuntu&t=deb&osn=ubuntu&osv=22.04&vr=%3E%3D0"><img alt="low 5.9: CVE--2023--7008" src="https://img.shields.io/badge/CVE--2023--7008-lightgrey?label=low%205.9&labelColor=fce1a9"/></a> 

<table>
<tr><td>Affected range</td><td><code>>=0</code></td></tr>
<tr><td>Fixed version</td><td><strong>Not Fixed</strong></td></tr>
<tr><td>CVSS Score</td><td><code>5.9</code></td></tr>
<tr><td>CVSS Vector</td><td><code>CVSS:3.1/AV:N/AC:H/PR:N/UI:N/S:U/C:N/I:H/A:N</code></td></tr>
<tr><td>EPSS Score</td><td><code>0.295%</code></td></tr>
<tr><td>EPSS Percentile</td><td><code>53rd percentile</code></td></tr>
</table>

<details><summary>Description</summary>
<blockquote>

A vulnerability was found in systemd-resolved. This issue may allow systemd-resolved to accept records of DNSSEC-signed domains even when they have no signature, allowing man-in-the-middles (or the upstream DNS resolver) to manipulate records.

</blockquote>
</details>
</details></td></tr>

<tr><td valign="top">
<details><summary><img alt="critical: 0" src="https://img.shields.io/badge/C-0-lightgrey"/> <img alt="high: 0" src="https://img.shields.io/badge/H-0-lightgrey"/> <img alt="medium: 0" src="https://img.shields.io/badge/M-0-lightgrey"/> <img alt="low: 1" src="https://img.shields.io/badge/L-1-fce1a9"/> <!-- unspecified: 0 --><strong>libzstd</strong> <code>1.4.8+dfsg-3build1</code> (deb)</summary>

<small><code>pkg:deb/ubuntu/libzstd@1.4.8%2Bdfsg-3build1?os_distro=jammy&os_name=ubuntu&os_version=22.04</code></small><br/>
<a href="https://scout.docker.com/v/CVE-2022-4899?s=ubuntu&n=libzstd&ns=ubuntu&t=deb&osn=ubuntu&osv=22.04&vr=%3E%3D0"><img alt="low 7.5: CVE--2022--4899" src="https://img.shields.io/badge/CVE--2022--4899-lightgrey?label=low%207.5&labelColor=fce1a9"/></a> 

<table>
<tr><td>Affected range</td><td><code>>=0</code></td></tr>
<tr><td>Fixed version</td><td><strong>Not Fixed</strong></td></tr>
<tr><td>CVSS Score</td><td><code>7.5</code></td></tr>
<tr><td>CVSS Vector</td><td><code>CVSS:3.1/AV:N/AC:L/PR:N/UI:N/S:U/C:N/I:N/A:H</code></td></tr>
<tr><td>EPSS Score</td><td><code>0.205%</code></td></tr>
<tr><td>EPSS Percentile</td><td><code>43rd percentile</code></td></tr>
</table>

<details><summary>Description</summary>
<blockquote>

A vulnerability was found in zstd v1.4.10, where an attacker can supply empty string as an argument to the command line tool to cause buffer overrun.

</blockquote>
</details>
</details></td></tr>
</table>

<a href="https://github.com/jaiderospina/DevSecOps2025/blob/main/ExamenFinal/GRUPO2/Documentaci%C3%B3n/README.md#%EF%B8%8F-2-fase-de-desarrollo" target="_blank">
  <img src="https://img.shields.io/badge/Regresar-Fase%202-blue" alt="Regresar: Fase 2" />
</a>