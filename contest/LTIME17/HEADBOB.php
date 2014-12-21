<?php require("../../includes/header.php"); ?><h1>Tanu and Head-bob</h1><div class="content">
<h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/LTIME17/mandarin/HEADBOB.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/LTIME17/russian/HEADBOB.pdf">Russian</a>.</h3>
<p>Tanu has got interested in signs and gestures that we use for communication. One such gesture is the head-bob.<br />When we want to signal "Yes" to someone, we move the head up-and-down. For "No", the head is moved left-and-right, rotating about the vertical axis.<br /> There is a peculiar way of gesturing "Yes", commonly seen in India, by moving head sideways (rotating about the forward-back axis). This is called the <i> Indian head-bob</i>.</p>
<p>Tanu observed many people on the railways station, and made a list of gestures that they made. Usual "Yes" gesture is recorded as "<b>Y</b>", no as "<b>N</b>" and Indian "Yes" gesture as "<b>I</b>". (Assume no foreigner uses the Indian "Yes" gesture and vice-versa). Identify which of them were Indians, which were not Indian, and which one you cannot be sure about.</p>
<h3>Input</h3>
<p>First line contains T, number of people observed by Tanu.<br />Each person is described in two lines. First line of the description contains a single integer N, the number of gestures recorded for this person. Next line contains a string of N characters, each character can be "Y", "N" or "I".<br />
<h3>Output</h3>
</p><p>For each person, print "INDIAN" if he/she is from India, "NOT INDIAN" if not from India, and "NOT SURE" if the information is insufficient to make a decision.<br />
<h3>Constraints</h3>
<ul>
<pre><li><b>For 30 points: </b>1 ≤ T,N ≤ 100</li><li><b>For 70 points: </b>1 ≤ T,N ≤ 1000</li></pre></ul><h3>Example</h3>
</p><p><b>Input:</b></p>
<pre>3<br />5<br />NNNYY<br />6<br />NNINNI<br />4<br />NNNN<br /></pre><p><br /><b>Output:</b></p>
<pre>NOT INDIAN<br />INDIAN<br />NOT SURE</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/piyushkumar">piyushkumar</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/xiaodao">xiaodao</a></td>
				</tr>
								
		        		<tr>
            <td width="14%">Date Added:</td>
            <td>20-08-2014</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table><?php require("../../includes/footer.php"); ?>