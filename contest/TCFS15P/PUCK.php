<?php require("../../includes/header.php"); ?><h1>Count the Apples</h1><div class="content">
<p> </p>
<h3>Problem description.</h3>
<p>
Dream Lord Morpheus owns an apple orchard. There are <b>N</b> apple trees in the orchard <b>numbering 1 to N</b>. Morpheus in recent busy designing the 'dreams' so he  needed a keeper of the orchard who could maintain the count of apples and inform on instantly about them. He picks you for the job and offers a handsome pay. You happily agree. Puck, the servant  of Morpheus, is very clever and mischievous. He loves to mess with things. So your trouble starts now.<br />
 </p>
<p>
Puck would on any visit to an apple tree may decide to use his magic potions to <b>increase the count of apple by 1 or leave the count</b> as it is. Puck visits the orchard daily. He selects a contiguous range of trees <b>[l, r] </b> and apply potions on some of trees of the range to achieve following</p>
<ul>
<li> convert count of apples in each tree in the given range to even count</li>
<li> convert count of apples in each tree in range to odd count</li>
<li> convert count of apples in trees with odd count to even count and trees with even count to odd count.</li>
</ul>

<p>But luckily he maintains a diary for the operation he does and you have access to the diary. Now at the end of day Morpheus may ask you the <b>count of apples in range [l, r] </b>. And your job is to answer him correctly for each such question otherwise you may not be allowed to return back from dream world ever.
</p>
<p>Initially the trees had some apples on them and luckily you are told the count before the job.<br />

</p><p>
Consider [<b>a<sub>1</sub></b>, <b>a<sub>2</sub></b>, ... <b>a<sub>n</sub></b>] initial count of apples on trees. <b>a<sub>i</sub></b> = count of apples on <b>i<sub>th</sub></b> tree.<br />
Each operation of Puck is described as</p>
<ul>
<li><b>O L R </b> -&gt; change all counts in this range to odd</li>
<li><b>E L R </b> -&gt; change all counts in this range to even</li>
<li><b>I L R </b> -&gt; change even counts to odd and odd to even</li>
<li><b>M L R </b> -&gt; print the answer to sum of counts for trees in range<b> [L, R] </b></li>
<ul>
<h3>Input</h3>
<p>Input description.</p>
<ul>
<li>First line contains an integer <b>N</b> denoting the number of trees</li>
<li>Next line contains <b>N space separated integers denoting <b>a<sub>1</sub></b>, <b>a<sub>2</sub></b> ... <b>a<sub>n</sub></b></b></li>
<li>The next line contains integer <b>Q</b> , number of operations
</li><li>Each of next Q lines contains on of the operation as described in the problem description</li>
</ul>
<h3>Output</h3>
<p>Output the count of apples for each of the query asked by Morpheus in separate lines</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>N</b> ≤ <b>10^6</b></li>
<li><b>1</b> ≤ <b>a<sub>i</sub></b> ≤ <b>10^3</b></li>
<li><b>1</b> ≤ <b>Q</b> ≤ <b>10^4</b></li>
<li><b>1</b> ≤ <b>L</b> ≤ <b>R</b> ≤ <b>N</b></li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
6
1 1 1 0 2 1
5
E 2 3
O 4 6
I 2 5
M 1 3
M 2 5
 
<b>Output:</b>
7
12
</pre><p> </p>
<h3>Explanation</h3>
<p><b>Example case 1.</b><br /><br />
After E 2 3 ,   Array -&gt; 1 2 2 0 2 1<br /><br />
After O 4 6,    Array -&gt; 1 2 2 1 3 1<br /><br />
After I 2 5,      Array -&gt; 1 3 3 2 4 2<br /><br />
M 1 3 -&gt; 1 + 3 + 3 = 7<br /><br />
M 2 5 -&gt; 3 + 3 + 2 + 4 = 12<br />
</p>
</ul></ul>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/techfest2k15">techfest2k15</a></td>
		</tr>
				        		<tr>
            <td width="14%">Date Added:</td>
            <td>25-09-2014</td>
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