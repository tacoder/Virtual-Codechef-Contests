<?php require("../../includes/header.php"); ?><h1>Gandalf vs the Balrog</h1><div class="content">

<p><html> <body></body></html></p>
<h1 style="font-family: Arial;"><small>ACM International Collegiate     Programming Contest, Asia-Amritapuri Site, 2012</small></h1>
<h2>Gandalf vs the Balrog<br /> </h2>
<p> <i>'We fought far under the living earth, where time is not counted. Ever he clutched me, and ever I hewed him, till at last he fled into dark tunnels.     Ever up now we went, until we came to the Endless Stair. Out he sprang, and even as I came behind, he burst into new flame.     Those that looked up from afar thought that the mountain was crowned with storm.     Thunder they heard, and lightning, they said, smote upon Celebdil, and leaped back broken into tongues of fire.'</i> - Gandalf, describing his fight against the Balrog.</p>
<p> Although Gandalf would not go into the details of his battle, they can be summarized into the following simplified form: both Gandalf and the Balrog have a set of <b>N</b> attacks they can use (spells, swords, brute-force strength etc.). These attacks are numbered from 1 to <b>N</b> in increasing order of Power. When each has chosen an attack, in general, the one with the higher power wins. However, there are a few ("<b>M</b>") anomalous pairs of attacks, in which the lesser-powered attack wins.</p>
<p> Initially, Gandalf picks an attack. Then the Balrog counters it with one of the remaining attacks. If the Balrog's counter does not defeat Gandalf's, then we say Gandalf receives a score of 2. If however it does, then Gandalf has exactly one more opportunity to pick an attack that will defeat the Balrog's. If he manages to defeat him now, his score will be 1, whereas if he is still unable to defeat him, his score will be 0.</p>
<p> Your task is to determine, given N and the M anomalous pairs of attacks, what will be Gandalf's score, given that both play optimally. Further, in case Gandalf gets a score of 2, you must also determine which attack he could have chosen as his first choice.</p>
<p> Note 1: The Balrog can choose only one attack, whereas Gandalf can choose upto two.<br /> Note 2: The relation A defeats B is not transitive within the attacks. For example, attack A can defeat attack B, attack B can defeat attack C, and attack C can defeat attack A.<br /> Note 3: Between any two attacks A and B, either attack A defeats attack B or attack B defeats attack A.</p>
<p></p>
<h3>Input (STDIN):</h3>

<p> The first line will consist of the integer <b>T</b>, the number of test-cases.<br /> Each test case begins with a single line containing two integers <b>N</b> and <b>M</b>.<br /> This is followed by <b>M</b> lines consisting of 2 integers each <b>x</b> and <b>y</b>, denoting that <b>x</b> and <b>y</b> are an anomalous pair.</p>
<p></p>
<h3>Output (STDOUT):</h3>

<p> For each test-case, output a single line either<br /> 2 <b>A</b>, if Gandalf can defeat any attack the Balrog chooses if he picks attack <b>A</b>,<br /> 1, if Gandalf can choose an attack such that even if the Balrog chooses an attack to defeat him, he can choose an attack to defeat the Balrog's chosen one,<br /> 0, if none of the above two options are possible for all possible choices of Gandalf's attack(s).<br /> Between successive test cases, there should not be any blank lines in the output.</p>
<p></p>
<h3>Constraints:</h3>

<p><b> 1 &lt;= T &lt;= 15<br /> 3 &lt;= N &lt;= 1,000,000<br /> 0 &lt;= M &lt;= min(N(N-1)/2, 300,000)<br /> 1 &lt;= x &lt; y &lt;= N for all the anomalous pairs (x,y)<br /> The sum of M over all test-cases will not exceed 300,000.</b></p>
<p></p>
<h3>Sample Input:</h3>

<p> <span style="font-family: Courier New,Courier,monospace;"> 2<br /> 3 0<br /> 3 1<br /> 1 3 </span></p>
<h3>Sample Output:</h3>

<p> <span style="font-family: Courier New,Courier,monospace;"> 2 3<br /> 1<br /> </span></p>
<h3>Notes/Explanation of Sample Input:</h3>

<p> In the first case, attack 3 can beat both attacks 1 and 2. So Gandalf just chooses attack 3.<br /> In the second case, attack 1 beats 3 which beats 2 which beats 1. No matter which attack Gandalf chooses, the Balrog can pick the one which defeats his, but then he can pick the remaining attack and defeat the Balrog's.</p>
<p> </p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/admin">admin</a></td>
		</tr>
								
		        		<tr>
            <td width="14%">Date Added:</td>
            <td>20-01-2013</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>1 - 4 sec</td>
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