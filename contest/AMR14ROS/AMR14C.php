<?php require_once("../../includes/header.php"); ?><h1>Dhonis Bowlers</h1><div class="content">
<p class="p4"><span class="s2">The</span><span class="s4"> </span><span class="s2">Indian team</span><span class="s4"> </span><span class="s1">is</span><span class="s4"> </span><span class="s2">known</span><span class="s4"> </span><span class="s2">for</span><span class="s4"> </span><span class="s1">their</span><span class="s4"> </span><span class="s2">strong batting and</span><span class="s4"> </span><span class="s2">sloppy bowling. The</span><span class="s5"> </span><span class="s2">captain</span><span class="s4"> </span><span class="s2">M.S. Dhoni</span><span class="s4"> </span><span class="s1">is</span><span class="s6"> </span><span class="s2">concerned</span><span class="s4"> </span><span class="s2">about </span><span class="s1">this</span><span class="s6"> </span><span class="s2">issue. He wants</span><span class="s4"> </span><span class="s1">to</span><span class="s2"> address</span><span class="s4"> </span><span class="s1">this</span><span class="s4"> </span><span class="s1">by</span><span class="s7"> </span><span class="s2">pairing up</span><span class="s4"> </span><span class="s2">bowlers</span><span class="s4"> </span><span class="s2">who</span><span class="s4"> </span><span class="s2">have </span><span class="s1">good</span><span class="s4"> </span><span class="s2">economy rates.</span></p>
<p class="p4"><span class="s2">He</span><span class="s4"> </span><span class="s2">has</span><span class="s4"> </span><span class="s2">all the bowlers'</span><span class="s4"> </span><span class="s2">economy rates</span><span class="s4"> </span><span class="s1">as</span><span class="s4"> </span><span class="s2">integers. Unfortunately, these</span><span class="s4"> </span><span class="s2">are T20</span><span class="s8"> </span><span class="s2">figures</span><span class="s4"> </span><span class="s2">and</span><span class="s4"> </span><span class="s1">to</span><span class="s2"> convert them </span><span class="s1">to</span><span class="s2"> </span><span class="s1">ODI</span><span class="s4"> </span><span class="s2">format,</span><span class="s4"> </span><span class="s2">he wants </span><span class="s1">to</span><span class="s2"> </span><span class="s1">pair</span><span class="s4"> </span><span class="s2">up bowlers</span><span class="s4"> </span><span class="s1">in</span><span class="s2"> such </span><span class="s1">a</span><span class="s7"> </span><span class="s1">way</span><span class="s2"> that the sum </span><span class="s1">of</span><span class="s4"> </span><span class="s2">the economy rates</span><span class="s4"> </span><span class="s1">of</span><span class="s2"> </span><span class="s1">two</span><span class="s2"> bowlers, modulo</span><span class="s4"> </span><span class="s2">M, </span><span class="s1">is</span><span class="s4"> </span><span class="s2">always</span><span class="s6"> </span><span class="s1">less</span><span class="s9"> </span><span class="s2">than </span><span class="s1">or</span><span class="s2"> equal</span><span class="s4"> </span><span class="s1">to</span><span class="s2"> X.</span></p>
<p class="p5"><span class="s1">Given</span><span class="s2"> the economy rates, </span><span class="s1">M</span><span class="s2"> and</span><span class="s4"> </span><span class="s2">X, can </span><span class="s1">you</span><span class="s6"> </span><span class="s1">tell</span><span class="s2"> him how many such ordered</span><span class="s10"> </span><span class="s2">pairs</span><span class="s6"> </span><span class="s2">are</span><span class="s4"> </span><span class="s2">possible?</span></p>
<p class="p4"><span class="s1">Note:</span><span class="s2"> The pair</span><span class="s4"> </span><span class="s1">of</span><span class="s4"> </span><span class="s2">bowlers</span><span class="s4"> </span><span class="s2">chosen </span><span class="s1">by</span><span class="s2"> </span><span class="s1">him</span><span class="s2"> can </span><span class="s1">be</span><span class="s2"> the same.</span><span class="s4"> </span><span class="s2">Yeah,</span><span class="s4"> </span><span class="s2">Dhoni has</span><span class="s4"> </span><span class="s1">won</span><span class="s6"> </span><span class="s1">a</span><span class="s10"> </span><span class="s2">cup</span><span class="s4"> </span><span class="s1">in</span><span class="s2"> </span><span class="s1">all</span><span class="s4"> </span><span class="s1">limited</span><span class="s4"> </span><span class="s1">over</span><span class="s4"> </span><span class="s2">formats, but he definitely</span><span class="s4"> </span><span class="s2">needs </span><span class="s1">to</span><span class="s2"> sharpen </span><span class="s1">his</span><span class="s4"> </span><span class="s1">math</span><span class="s11"> </span><span class="s2">skills.</span></p>
<p class="p6"><span class="s2"><b>Input:</b></span></p>
<p class="p4"><span class="s2">The</span><span class="s4"> </span><span class="s2">first </span><span class="s1">line</span><span class="s4"> </span><span class="s2">contains</span><span class="s4"> </span><span class="s2">the number</span><span class="s4"> </span><span class="s1">of</span><span class="s4"> </span><span class="s2">test cases</span><span class="s4"> </span><span class="s1">T.</span><span class="s2"> Each</span><span class="s4"> </span><span class="s2">test case contains</span><span class="s4"> </span><span class="s1">N,</span><span class="s2"> </span><span class="s1">M</span><span class="s12"> </span><span class="s2">and</span><span class="s4"> </span><span class="s1">X</span><span class="s4"> </span><span class="s1">on</span><span class="s2"> the first line, </span><span class="s1">followed</span><span class="s4"> </span><span class="s1">by</span><span class="s2"> </span><span class="s1">N</span><span class="s2"> space separated</span><span class="s4"> </span><span class="s2">integers </span><span class="s1">A[1..N]</span><span class="s4"> </span><span class="s1">on</span><span class="s2"> the</span><span class="s5"> </span><span class="s2">second</span><span class="s13"> </span><span class="s1">line.</span></p>
<p class="p6"><span class="s1"><b>Output:</b></span></p>
<p class="p4"><span class="s2">Output</span><span class="s4"> </span><span class="s1">T</span><span class="s2"> lines,</span><span class="s4"> </span><span class="s2">containing the</span><span class="s4"> </span><span class="s2">answer</span><span class="s4"> </span><span class="s2">for</span><span class="s4"> </span><span class="s2">the</span><span class="s4"> </span><span class="s2">corresponding test</span><span class="s4"> </span><span class="s2">case.</span></p>
<p class="p6"><span class="s2"><b>Constraints:</b></span></p>
<p class="p6"><span class="s1">1</span><span class="s2"> </span><span class="s1">&lt;=</span><span class="s2"> </span><span class="s1">T</span><span class="s4"> </span><span class="s1">&lt;=</span><span class="s2"> </span><span class="s1">10</span></p>
<p class="p6"><span class="s1">1</span><span class="s2"> </span><span class="s1">&lt;=</span><span class="s2"> </span><span class="s1">N</span><span class="s2"> </span><span class="s1">&lt;=</span><span class="s2"> 100000</span></p>
<p class="p6"><span class="s1">0</span><span class="s2"> </span><span class="s1">&lt;=</span><span class="s2"> </span><span class="s1">X</span><span class="s2"> </span><span class="s1">&lt;</span><span class="s2"> </span><span class="s1">M</span><span class="s2"> &lt;= 100000</span></p>
<p class="p7"><span class="s1">0</span><span class="s2"> </span><span class="s1">&lt;=</span><span class="s2"> A[i] </span><span class="s1">&lt;=</span><span class="s2"> 1000000000</span></p>
<p class="p6"><span class="s2"><b>Sample</b></span><span class="s14"><b> </b></span><span class="s1"><b>Input:</b></span></p>
<p class="p6"><span class="s1">2</span></p>
<p class="p6"><span class="s1">3</span><span class="s3"> </span><span class="s1">5</span><span class="s2"> </span><span class="s1">3</span></p>
<p class="p6"><span class="s1">1</span><span class="s3"> </span><span class="s1">2</span><span class="s2"> </span><span class="s1">3</span></p>
<p class="p8"><span class="s1">4</span><span class="s3"> </span><span class="s1">7</span><span class="s2"> </span><span class="s1">4</span></p>
<p class="p4"><span class="s1">31</span><span class="s3"> </span><span class="s2">12</span><span class="s3"> </span><span class="s2">11</span><span class="s3"> </span><span class="s2">17</span></p>
<p class="p6"><span class="s2"><b>Sample</b></span><span class="s14"><b> </b></span><span class="s1"><b>Output:</b></span></p>
<p class="p6"><span class="s1">6</span></p>
<p class="p7"><span class="s1">12</span></p>
<p class="p6"><span class="s2"><b>Explanation:</b></span></p>
<p class="p9"><span class="s1">For</span><span class="s2"> the first </span><span class="s1">example,</span><span class="s2"> the </span><span class="s1">valid</span><span class="s2"> pairs are (1,</span><span class="s4"> </span><span class="s2">1),</span><span class="s1"> </span><span class="s2">(1,</span><span class="s4"> </span><span class="s2">2),</span><span class="s1"> </span><span class="s2">(2,</span><span class="s4"> </span><span class="s2">1),</span><span class="s1"> </span><span class="s2">(2, 3),</span><span class="s4"> </span><span class="s2">(3,</span><span class="s1"> </span><span class="s2">2), (3,</span><span class="s1"> </span><span class="s2">3).</span></p>
<p class="p10"> </p>
<p class="p8"> </p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/murdocc007">murdocc007</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>27-12-2014</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.9.2, CPP14, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table><?php require_once("../../includes/footer.php"); ?>