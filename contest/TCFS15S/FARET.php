<?php require("../../includes/header.php"); ?><h1>Faulty Retention</h1><div class="content">
<p> </p>
<p>Indian RAW maintains a track of all its Secret Agents spread across the globe, by maintaining a list of their Fake names  in the order of the riskiness<br />
of their place of posting. All names are distinct and each name is composed of only lowercase letter ('a'-'z'). The RAW agent, Charlie, who keeps this list secretive, is one day assigned the task of keeping a backup of this list in his<br />
brain memory so that the security is not compromised in case of any cyber attack on the computer database and the original database can be automatically<br />
erased. However Charlie employs a faulty retention method which is as follows:<br />
Charlie remembers two lists memory1 and memory2 such that for each valid index k, memory1[k]th (0-indexed) name in the list is a prefix of the memory2[k]th name. Charlie might have missed to remember some possible such pairs. However with such a brain memory retention technique, there are a lot of possible orderings that can arise.<br />
Let Y be the number of different orderings possible of original list consistent with Charlie's memory . Output Y modulo 1,000,000,007 given the shuffled list of Fake names and the two memory lists. If Charlie's memory is inconsistent then Y will be 0.</p>
<p> </p>
<h3>Input</h3>
<p>Input description.</p>
<p>Tips:</p>
<ul>
<li>The first line of test case contains a single integer <b>N</b> denoting the number of names. The second line contains <b>N</b> space-separated names <b>A<sub>0</sub></b>, <b>A<sub>1</sub></b>, <b>A<sub>2</sub></b>,...... <b>A<sub>N-1</sub></b>. </li>
<li>Next line contains a single integer <b>M</b> denoting the number of elements in each array memory1 and memory2. The next two each line contains <b>M</b> space-separated integers denoting the elements of memory1 and memory2. </li>
</ul>
<p> </p>
<h3>Output</h3>
<p>Output description.</p>
<p>Tips:</p>
<ul>
<li>Output Y</li>
</ul>
<p> </p>
<h3>Constraints</h3>
<p>Should contain all the constraints on the input data that you may have. Format it like:</p>
<ul>
<li><b>2</b> ≤ <b>N ≤ 50</b></li>
<li><b>0</b> ≤ <b>M ≤ 8</b></li>
<li><b>1</b> ≤ <b>length of each name ≤ 50</b></li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
4
marc marco marcol marcpolo
2
0 0
1 2 
<b>Output:</b>
6
</pre>
<pre><b>Input:</b>
3
alpha marco tango
2
0 1
1 0
<b>Output:</b>
0
</pre>
<pre><b>Input:</b>
3
alpha alp alphabeta
0
<b>Output:</b>
6
</pre><p> </p>
<h3>Explanation</h3>
<p><b>Example case 1.</b><br />
According to charlie 0th name is the prefix of 1st and 2nd name. "marc" has to be the first name.</p>
<p><b>Example case 2.</b><br />
According to charlie 0th name and 1st are prefix of each other which is only possible if both the names are same but all names should be distinct. Incosistent memory.</p>
<p><b>Example case 3.</b><br />
Charlie failed to remember anything.</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/techfest2k15">techfest2k15</a></td>
		</tr>
				        		<tr>
            <td width="14%">Date Added:</td>
            <td>8-10-2014</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>2 - 3 sec</td>
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