<?php require("../../includes/header.php"); ?><h1>Lyra and the Alethiometer</h1><div class="content">

<p>Lyra Belacqua is a very gifted girl. She is one of a very small set of people capable of reading an alethiometer, more commonly known as The Golden Compass. It has one specific use: to tell the truth. The name in fact, is derived from "Aletheia" meaning truth, and "-ometer", meaning "measuring device".</p>
<p>The alethiometer had four needles, out of which the user would direct three of them to lie over symbols on the face of the device to ask a question. The fourth needle then swung into action and pointed to various symbols one after another, thus telling the answer.</p>
<p>For this problem, consider the alethiometer consisting of symbols : digits '<b>0</b>'-'<b>9</b>' and letters '<b>A</b>'-'<b>Z</b>'. Learned scholars were debating the age of the Universe, and they requested Lyra to find out the age from the alethiometer. Having asked the question, the fourth needle started spouting out symbols, which Lyra quickly recorded. In that long string of characters, she knows that some substring corresponds to the age of the Universe. She also knows that the alethiometer could have wrongly pointed out atmost one digit (0-9) as a letter (A-Z). She then wonders what is the maximum possible age of the Universe.</p>
<p>Given the set of symbols the alethiometer pointed out, help her find the maximum age of the Universe, which could correspond to a substring of the original string with atmost one letter changed.</p>
<p><b>Note:</b> We consider a substring to be a contiguous part of the string <b>S</b> </p>
<p> Also, the alethiometer wrongly reports only a <b>letter</b>. All the <b>digits</b> <i>remain as they are</i>.</p>
<h3>Input</h3>
<p>Each input consists of a single string <b>S</b> which is what Lyra recorded from the fourth needle's pointing.</p>
<h3>Output</h3>
<p>Output one number, the maximum possible answer.</p>
<h3>Constraints</h3>
<ul>
<li> <b>1</b> ≤ |<b>S</b>|  ≤ <b>1,000</b></li>
<li> <b>S</b> will only contain digits 0-9 and uppercase Latin letters. </li>
</ul>
<h3>Example</h3>
<pre><b>Input1:</b>
06454

<b>Input2:</b>
C0D3C43F

<b>Output1:</b>
6454

<b>Output2:</b>
3943
</pre><h3>Explanation</h3>
<p>In the first example, there is no choice as to what the number can be. It has to be 6,454.</p>
<p>In the second example, there are a total of 41 possible strings (one for the original, and 10 for changing each letter). You can verify that the maximum number as a substring is got by making the string "C0D3943F".</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/pragrame">pragrame</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/tuananh93">tuananh93</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>3-06-2013</td>
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