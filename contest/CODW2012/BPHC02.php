<?php require("../../includes/header.php"); ?><h1>Alice and Bob</h1><div class="content">

<p>Situation</p>
<p>Alice sends her messages to Bob with a signature generated using some known signature-creation algorithm implemented as genSignature() below. Bob verifies that the message is sent by Alice itself by generating the signature for the message by a password known to only both of them, and verifying that both signatures match.</p>
<p>
By some means we are able to eavesdrop on their conversation and captured some message and their corresponding signature. Its known that Alice always uses the same password for the signature creation, even for furure messages. Our task is decode the password from the captured packets and prove to Alice that some person Eve could also do the same and create signature which looks real and impersonate Alice.</p>
<pre><code>
void genSignature(char *msg, char *key, int msglength)	{
int keylength = strlen(key);
int i;
    for(i=0; i&ltmsglength; ++i)
    msg[i] = msg[i] & key[i%keylength];
}
</code></pre><h3>Input</h3>
<p>The input will be lines containing the hex-representation of the bytes captured from their conversation. The first line contains the total no of packets we captured, say N (in decimal representation). The following 2*N lines contains capture in the following format - the message in the first line, followed by its signature in the next line (hex-representation). Each packet is 128bit, and the password is 48bit.</p>
<h3>Output</h3>
<p>It may not be possible to find a unique password in every case. There may be multiple passwords which can generate the same signature for the given packets (REMEMBER - it depends on the GIVEN packets. The password used by Alice is unique). In every case, all the possible 48bit passwords(hex-represenation) which can generate the exact signature of given packets has to be found, sorted in ascending order of their byte values and printed one by one each on a new line</p>
<h3>Example</h3>
<pre>
<b>Input:
2	// &lt;- Total no of packets captured
ED 9A 6F 21 D6 7F A7 5E 28 B8 11 47 1B A8 24 FC		// msg packet 1
69 88 42 01 06 3C 21 4C 00 80 00 04 19 88 00 84		// signature for msg1
75 19 45 E4 66 62 05 D6 BA 7E A2 0D 03 C8 49 F1		// msg packet 2
71 08 40 84 26 20 01 C4 12 04 22 0C 01 C8 40 81		// signature for msg2
</b>

<b>Output:
 (for the prev input).
79 CC 52 85 26 3C
79 CC 52 85 26 BC
79 CC 52 85 2E 3C
79 CC 52 85 2E BC
</b>

</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/raghupotluri">raghupotluri</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>19-10-2012</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>1 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>