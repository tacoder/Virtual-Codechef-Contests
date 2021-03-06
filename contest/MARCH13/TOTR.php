<?php require("../../includes/header.php"); ?><h1>Tourist Translations</h1><div class="content">

<p>A tourist is visiting Byteland. The tourist knows English very well. The language of Byteland is rather different from English. To be exact it differs in following points:</p>
<ul>
<li>Bytelandian alphabet has the same letters as English one, but possibly different in meaning. Like 'A' in Bytelandian may be 'M' in English. However this does <b>not</b> mean that 'M' in Bytelandian must be 'A' in English. More formally, Bytelindian alphabet is a permutation of English alphabet. It will be given to you and could be any possible permutation. Don't assume any other condition.</li>
<li>People of Byteland don't like to use invisible character for separating words. Hence instead of space (' ') they use underscore ('_'). Other punctuation symbols, like '?', '!' remain the same as in English.</li>
</ul>
<p>The tourist is carrying "The dummies guide to Bytelandian", for translation. The book is serving his purpose nicely. But he is addicted to sharing on BaceFook, and shares his numerous conversations in Byteland on it. The conversations are rather long, and it is quite tedious to translate for his English friends, so he asks you to help him by writing a program to do the same.</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b>, denoting the length of the conversation, and the string <b>M</b>, denoting the English translation of Bytelandian string <b>"abcdefghijklmnopqrstuvwxyz"</b>. <b>T</b> and <b>M</b> are separated by exactly one space. Then <b>T</b> lines follow, each containing a Bytelandian sentence <b>S</b> which you should translate into English. See constraints for details.</p>
<h3>Output</h3>
<p>For each of the sentence in the input, output its English translation on a separate line. Replace each underscores ('_') with a space (' ') in the output. Each punctuation symbol (see below) should remain the same. Note that the uppercase letters in Bytelandian remain uppercase in English, and lowercase letters remain lowercase. See the example and its explanation for clarity.</p>
<h3>Constraints</h3>
<p> </p>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>100</b></li>
<li><b>M</b> is a permutation of <b>"abcdefghijklmnopqrstuvwxyz"</b></li>
<li>Each sentence is non-empty and contains at most <b>100</b> characters</li>
<li>Each sentence may contain only lowercase letters ('a'-'z'), uppercase letters ('A'-'Z'), underscores ('_') and punctuation symbols: dot ('.'), comma (','), exclamation ('!'), question-mark('?')</li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
5 qwertyuiopasdfghjklzxcvbnm
Ph
Pcssi
Bpke_kdc_epclc_jcijsc_mihyo?
Epcf_kdc_liswhyo_EIED_hy_Vimcvpcn_Zkdvp_siyo_viyecle.
Ipp!

<b>Output:</b>
Hi
Hello
What are these people doing?
They are solving TOTR in Codechef March long contest.
Ohh!
</pre><h3>Explanation</h3>
<p>The string "qwertyuiopasdfghjklzxcvbnm" means that 'a' in Bytelandian is 'q' in English, 'b' in Bytelandian is 'w' in English, 'c' in Bytelandian is 'e' in English and so on.<br />Thus to translate "Ph" (first sentence in example) to English:<br />1) We find that 'p' in Bytelandian means 'h' in English. So we replace 'P' with 'H'.<br />2) Then we see that 'h' in Bytelandian means 'i' in English. So we replace 'h' with 'i'.<br />3) Therefore, the translation is "Hi".</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/vinayak garg">vinayak garg</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/anton_lunyov">anton_lunyov</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>7-09-2012</td>
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