<?php require("../../includes/header.php"); ?><h1>Get Synapse Online</h1><div class="content">

<p>Finally the clowns of Synapse have decided to take their site online. The convener of the clowns has heard from somewhere that knowing URI's is very important for their website, so kindly help him with this task.<br />
Uniform Resource Identifiers (or URIs) are strings like<br />
   <i>http://synapse.daiict.ac.in/codemutants/</i>, <i>mailto:clown_convener@synapse.daiict.ac.in</i>,<br />
   <i>ftp://10.100.93.93/night_halters</i>, or even just <i>output.txt</i> that are<br />
   used to identify a resource, usually on the Internet or a local computer.<br />
   Certain characters are reserved within URIs, and if a reserved character is<br />
   part of an identifier then it must be <dfn>percent-encoded</dfn> by<br />
   replacing it with a percent sign followed by two hexadecimal digits<br />
   representing the ASCII code of the character. A table of seven reserved<br />
   characters and their encodings is shown below. Your job is to write a<br />
   program that can percent-encode a string of characters.</p>
<table align="center">
<thead>
<tr>
<td><b>Character</b></td>
<td><b>Encoding</b></td>
</tr>
</thead>
<tbody>
<tr>
<td>" " (space)</td>
<td align="right">%20</td>
</tr>
<tr>
<td>"<tt>!</tt>" (exclamation point)</td>
<td align="right">%21</td>
</tr>
<tr>
<td>"<tt>$</tt>" (dollar sign)</td>
<td align="right">%24</td>
</tr>
<tr>
<td>"<tt>%</tt>" (percent sign)</td>
<td align="right">%25</td>
</tr>
<tr>
<td>"<tt>(</tt>" (left parenthesis)</td>
<td align="right">%28</td>
</tr>
<tr>
<td>"<tt>)</tt>" (right parenthesis)</td>
<td align="right">%29</td>
</tr>
<tr>
<td>"<tt>*</tt>" (asterisk)</td>
<td align="right">%2a</td>
</tr>
</tbody>
</table>
<p><b>Input:</b> The input consists of one or more strings, each<br />
   1&#8211;79 characters long and on a line by itself, followed by a line<br />
   containing only "#" that signals the end of the input. The character "#" is<br />
   used only as an end-of-input marker and will not appear anywhere else in the<br />
   input. A string may contain spaces, but not at the beginning or end of the<br />
   string, and there will never be two or more consecutive spaces.</p>
<p><b>Output:</b> For each input string, replace every occurrence of a<br />
   reserved character in the table above by its percent-encoding, exactly as<br />
   shown, and output the resulting string on a line by itself. Note that the<br />
   percent-encoding for an asterisk is %2a (with a lowercase "a") rather than<br />
   %2A (with an uppercase "A").</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
Happy Joy Joy!
<a href="http://synapse.daiict.ac.in/" title="http://synapse.daiict.ac.in/">http://synapse.daiict.ac.in/</a>
plain_vanilla
(**)
?
the 7% solution
#

<b>Output:</b>
Happy%20Joy%20Joy%21
<a href="http://synapse.daiict.ac.in/" title="http://synapse.daiict.ac.in/">http://synapse.daiict.ac.in/</a>
plain_vanilla
%28%2a%2a%29
?
the%207%25%20solution
</pre>    </div><table align="center">
<thead>
<tr>
<td><b>Character</b></td>
<td><b>Encoding</b></td>
</tr>
</thead>
<tbody>
<tr>
<td>" " (space)</td>
<td align="right">%20</td>
</tr>
<tr>
<td>"<tt>!</tt>" (exclamation point)</td>
<td align="right">%21</td>
</tr>
<tr>
<td>"<tt>$</tt>" (dollar sign)</td>
<td align="right">%24</td>
</tr>
<tr>
<td>"<tt>%</tt>" (percent sign)</td>
<td align="right">%25</td>
</tr>
<tr>
<td>"<tt>(</tt>" (left parenthesis)</td>
<td align="right">%28</td>
</tr>
<tr>
<td>"<tt>)</tt>" (right parenthesis)</td>
<td align="right">%29</td>
</tr>
<tr>
<td>"<tt>*</tt>" (asterisk)</td>
<td align="right">%2a</td>
</tr>
</tbody>
</table><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/wizgen">wizgen</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>13-02-2012</td>
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